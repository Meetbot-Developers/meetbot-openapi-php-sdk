<?php
declare(strict_types=1);
namespace Meetbot\OpenApi\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use Meetbot\OpenApi\MeetbotClient;
use Meetbot\OpenApi\MeetbotConfig;
use Meetbot\OpenApi\Http\MeetbotHttpClient;
use Meetbot\OpenApi\Exception\MeetbotApiException;
use Meetbot\OpenApi\Exception\MeetbotHttpException;
use Meetbot\OpenApi\Exception\MeetbotException;
use Meetbot\OpenApi\Model\BlockGroupResponse;
use Meetbot\OpenApi\Model\WhatsappMessageSendParam;
use Meetbot\OpenApi\Model\Enums\WhatsappMessageType;
use Meetbot\OpenApi\Model\Hydrator;
use Meetbot\OpenApi\Webhook\WebhookParser;
use Meetbot\OpenApi\Webhook\WebhookListenerAdapter;
use Meetbot\OpenApi\Webhook\WebhookEvent;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class SdkTest extends TestCase
{
    private array $history = [];
    private function http(mixed $result = null, ?Response $response = null): MeetbotHttpClient
    {
        return new MeetbotHttpClient(new MeetbotConfig('test-key'), $this->guzzle($result, $response));
    }
    private function guzzle(mixed $result = null, ?Response $response = null): Client
    {
        $stack = HandlerStack::create(new MockHandler([$response ?? new Response(200, [], json_encode(['code' => 0, 'result' => $result], JSON_THROW_ON_ERROR))]));
        $stack->push(Middleware::history($this->history));
        return new Client(['handler' => $stack]);
    }

    public function testListGroupsThroughFacade(): void
    {
        $sdk = new MeetbotClient(new MeetbotConfig('test-key'), $this->guzzle([['groupId' => 42, 'groupName' => '示例分组']]));
        $groups = $sdk->blocks()->listGroups();
        self::assertInstanceOf(BlockGroupResponse::class, $groups[0]);
        self::assertSame('示例分组', $groups[0]->getGroupName());
        self::assertSame('https://openapi.meetbot.com/block/group/list', (string) $this->history[0]['request']->getUri());
        self::assertSame('test-key', $this->history[0]['request']->getHeaderLine('APIKEY'));
        self::assertFalse($this->history[0]['options']['allow_redirects']);
        self::assertSame($sdk->blocks(), $sdk->blocks());
    }

    public static function operations(): iterable
    {
        foreach (json_decode(file_get_contents(__DIR__ . '/../resources/operations.json'), true, 512, JSON_THROW_ON_ERROR) as $operation) {
            yield $operation['api'] . '::' . $operation['method'] => [$operation];
        }
    }
    #[DataProvider('operations')]
    public function testEveryOperationBuildsRequest(array $op): void
    {
        $class = 'Meetbot\\OpenApi\\Api\\' . $op['api'];
        $api = new $class($this->http());
        $args = [];
        foreach ($op['params'] as $param) {
            $args[] = $param['name'] === 'request' ? ['test' => 'value'] : '123';
        }
        $stream = null;
        if ($op['multipart']) { $stream = fopen('php://temp', 'r+'); fwrite($stream, '{"version":"7.0"}'); rewind($stream); $args = ['123', $stream]; }
        try {
            $api->{$op['method']}(...$args);
            $request = $this->history[0]['request'];
            self::assertSame($op['verb'], $request->getMethod());
            self::assertSame($op['path'], $request->getUri()->getPath());
            parse_str($request->getUri()->getQuery(), $query);
            foreach ($op['query'] as [$key, $source]) { if (!str_contains($source, '.')) { self::assertSame('123', $query[$key]); } }
            if ($op['jsonBody']) { self::assertSame(['test' => 'value'], json_decode((string) $request->getBody(), true)); }
            if ($op['multipart']) { self::assertStringContainsString('name="file"', (string) $request->getBody()); self::assertTrue(is_resource($stream)); }
        } finally { if (is_resource($stream)) { fclose($stream); } }
    }

    public static function contractExamples(): iterable
    {
        foreach (json_decode(file_get_contents(__DIR__ . '/fixtures/openapi-additions.json'), true, 512, JSON_THROW_ON_ERROR) as $case) {
            yield $case['operationId'] => [$case];
        }
    }
    #[DataProvider('contractExamples')]
    public function testOfficialContractExamples(array $case): void
    {
        $class = 'Meetbot\\OpenApi\\Api\\' . $case['api'];
        $api = new $class($this->http($case['result']));
        $args = $case['argValues'];
        foreach ($case['argTypes'] as $i => $type) {
            $modelClass = 'Meetbot\\OpenApi\\Model\\' . $type;
            if (class_exists($modelClass)) { $args[$i] = new $modelClass($args[$i]); }
        }
        $result = $api->{$case['method']}(...$args);
        $expected = $case['result'];
        if ($result instanceof \Meetbot\OpenApi\Model\StringIdResult || $result instanceof \Meetbot\OpenApi\Model\LongIdResult) {
            $expected = is_array($expected) ? $expected['id'] : $expected;
        }
        self::assertEquals($expected, json_decode(json_encode($result, JSON_THROW_ON_ERROR), true));
        $request = $this->history[0]['request'];
        self::assertSame($case['path'], $request->getUri()->getPath());
        self::assertSame($case['verb'], $request->getMethod());
        parse_str($request->getUri()->getQuery(), $query);
        $expectedQuery = array_map(static fn ($value) => is_bool($value) ? ($value ? 'true' : 'false') : (string) $value, $case['query']);
        self::assertSame($expectedQuery, $query);
        if ($case['body'] !== null) { self::assertEquals($case['body'], json_decode((string) $request->getBody(), true)); }
    }

    public function testNestedModelsEnumsAndExtensionFields(): void
    {
        $model = new WhatsappMessageSendParam(['type' => 'text', 'text' => ['body' => '你好'], 'recipient_type' => 'individual', 'future_field' => (object) []]);
        self::assertSame(WhatsappMessageType::TEXT, $model->getType());
        self::assertSame('你好', $model->getText()->getBody());
        $json = json_decode(json_encode($model, JSON_THROW_ON_ERROR));
        self::assertSame('whatsapp', $json->messaging_product);
        self::assertSame('individual', $json->recipient_type);
        self::assertInstanceOf(\stdClass::class, $json->future_field);
        self::assertFalse(property_exists($json, 'recipientType'));
    }

    public function testPaginationAndBigInteger(): void
    {
        $raw = '{"code":0,"result":{"total":1,"list":[{"groupId":9223372036854775808,"groupName":"x"}]}}';
        $page = $this->http(null, new Response(200, [], $raw))->request('GET', '/test', [], null, 'PageResult<BlockGroupResponse>');
        self::assertSame(1, $page->getTotal());
        self::assertSame('9223372036854775808', $page->getList()[0]->getGroupId());
    }
    public function testScalarResults(): void
    {
        self::assertTrue(Hydrator::convert(true, 'BooleanResult')->isTrue());
        self::assertSame('123', Hydrator::convert('123', 'StringIdResult')->getId());
        self::assertSame(123, Hydrator::convert((object) ['id' => 123], 'LongIdResult')->getId());
    }
    public function testContactAndInteractiveNestedModels(): void
    {
        $contact = new \Meetbot\OpenApi\Model\WhatsappContactObject([
            'name' => ['formatted_name' => 'Example'],
            'phones' => [['phone' => '123', 'type' => 'WORK', 'wa_id' => '456']],
        ]);
        self::assertSame('Example', $contact->getName()->getFormattedName());
        self::assertSame('456', $contact->getPhones()[0]->getWaId());
        $interactive = new \Meetbot\OpenApi\Model\WhatsappInteractiveObject([
            'type' => 'list', 'body' => ['text' => 'Choose'],
            'action' => ['sections' => [['title' => 'Menu', 'rows' => [['id' => '1', 'title' => 'First']]]]],
        ]);
        self::assertSame('1', $interactive->getAction()->getSections()[0]->getRows()[0]->getId());
        self::assertSame('Choose', $interactive->getBody()->getText());
    }

    public function testEveryModelLoadsAndReferencesExistingTypes(): void
    {
        foreach (glob(__DIR__ . '/../src/Model/*.php') as $file) {
            $class = 'Meetbot\\OpenApi\\Model\\' . basename($file, '.php');
            self::assertTrue(class_exists($class));
            $reflection = new \ReflectionClass($class);
            if ($reflection->isAbstract() || $class === Hydrator::class) { continue; }
            new $class();
            foreach ($reflection->getConstant('FIELDS') as [$wire, $type]) {
                foreach (preg_split('/[<>,]+/', $type, -1, PREG_SPLIT_NO_EMPTY) as $part) {
                    if (in_array($part, ['String','Integer','Long','Boolean','Double','Float','Number','Object','JsonNode','List','Map','T','BigDecimal'], true)) { continue; }
                    self::assertTrue(class_exists('Meetbot\\OpenApi\\Model\\' . $part) || enum_exists('Meetbot\\OpenApi\\Model\\Enums\\' . $part), $class . ' references ' . $part);
                }
            }
        }
    }
    public function testQueryNullAndBoolean(): void
    {
        $this->http()->request('GET', '/test', ['empty' => null, 'enabled' => false, 'zero' => 0]);
        self::assertSame('enabled=false&zero=0', $this->history[0]['request']->getUri()->getQuery());
    }
    public function testApiError(): void
    {
        try { $this->http(null, new Response(200, [], '{"code":401,"message":"denied","traceId":"trace-1","success":false}'))->request('GET', '/test'); self::fail('Expected API error'); }
        catch (MeetbotApiException $error) { self::assertSame(401, $error->apiCode); self::assertSame('trace-1', $error->traceId); }
    }
    public function testHttpError(): void
    {
        $this->expectException(MeetbotHttpException::class);
        $this->http(null, new Response(503, [], '<html>unavailable</html>'))->request('GET', '/test');
    }
    public function testInvalidJson(): void
    {
        $this->expectException(MeetbotException::class);
        $this->http(null, new Response(200, [], '<html>not json</html>'))->request('GET', '/test');
    }
    public function testWebhookDispatchAndUnknownType(): void
    {
        $listener = new class extends WebhookListenerAdapter {
            public mixed $event;
            public function onSendSuccess(mixed $event): void { $this->event = $event; }
            public function onUnhandled(WebhookEvent $event): void { $this->event = $event; }
        };
        $parser = new WebhookParser();
        $parser->dispatch('{"type":"SEND_SUCCESS","messageId":123,"msg":{}}', $listener);
        self::assertSame(123, $listener->event->getMessageId());
        $parser->dispatch('{"type":"FUTURE","msg":{}}', $listener);
        self::assertInstanceOf(WebhookEvent::class, $listener->event);
    }
}
