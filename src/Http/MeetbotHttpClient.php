<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Http;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use Meetbot\OpenApi\MeetbotConfig;
use Meetbot\OpenApi\Exception\MeetbotException;
use Meetbot\OpenApi\Exception\MeetbotHttpException;
use Meetbot\OpenApi\Exception\MeetbotApiException;
use Meetbot\OpenApi\Model\Hydrator;

final class MeetbotHttpClient
{
    private readonly ClientInterface $client;
    public function __construct(private readonly MeetbotConfig $config, ?ClientInterface $client = null)
    {
        $this->client = $client ?? new Client();
    }

    public function request(string $method, string $path, array $query = [], mixed $body = null, string $type = 'Object', array $options = []): mixed
    {
        $query = array_filter($query, static fn ($value) => $value !== null);
        $query = array_map(static fn ($value) => $value instanceof \BackedEnum ? $value->value : (is_bool($value) ? ($value ? 'true' : 'false') : $value), $query);
        $options['query'] = $query;
        $options['headers'] = ['APIKEY' => $this->config->getApiKey(), 'Accept' => 'application/json', 'User-Agent' => 'meetbot-openapi-php-sdk/1.0'];
        $options['http_errors'] = false;
        $options['allow_redirects'] = false;
        $options['connect_timeout'] = $this->config->connectTimeout;
        $options['timeout'] = $this->config->timeout;
        if ($body !== null) {
            $options['headers']['Content-Type'] = 'application/json';
            $options['body'] = json_encode($body, JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        }
        try {
            $response = $this->client->request($method, rtrim($this->config->baseUrl, '/') . '/' . ltrim($path, '/'), $options);
        } catch (GuzzleException $error) {
            // Do not attach a Guzzle exception containing the authenticated request.
            throw new MeetbotException('Meetbot transport failed (' . get_class($error) . ')');
        }
        $raw = (string) $response->getBody();
        if ($response->getStatusCode() < 200 || $response->getStatusCode() >= 300) {
            throw new MeetbotHttpException($response->getStatusCode(), $raw, $response->getHeaders());
        }
        try { $envelope = json_decode($raw, false, 512, JSON_THROW_ON_ERROR | JSON_BIGINT_AS_STRING); }
        catch (\JsonException $error) { throw new MeetbotException('Invalid JSON response', 0, $error); }
        if (!$envelope instanceof \stdClass || (!property_exists($envelope, 'success') && !property_exists($envelope, 'code'))) {
            throw new MeetbotException('Invalid Meetbot response envelope');
        }
        $success = $envelope->success ?? (($envelope->code ?? null) === 0);
        if ($success !== true) {
            throw new MeetbotApiException(isset($envelope->code) ? (int) $envelope->code : null, (string) ($envelope->message ?? 'API request failed'), $envelope->traceId ?? null, $raw);
        }
        return Hydrator::convert($envelope->result ?? null, $type);
    }

    /** $file is a local path or a caller-owned readable stream. */
    public function upload(string $path, string $flowId, mixed $file, string $fileName, string $type): mixed
    {
        $owned = is_string($file);
        if ($owned) {
            if (!is_file($file) || !is_readable($file)) { throw new \InvalidArgumentException('Upload file is not readable'); }
            $fileName = basename($file);
            $file = fopen($file, 'rb');
        }
        if (!is_resource($file) || get_resource_type($file) !== 'stream') { throw new \InvalidArgumentException('Upload requires a file path or readable stream'); }
        try {
            return $this->request('POST', $path, ['flowId' => $flowId], null, $type, ['multipart' => [
                ['name' => 'flowId', 'contents' => $flowId],
                ['name' => 'file', 'contents' => $file, 'filename' => $fileName, 'headers' => ['Content-Type' => 'application/json']],
            ]]);
        } finally {
            if ($owned && is_resource($file)) { fclose($file); }
        }
    }
}
