# Meetbot OpenAPI PHP SDK

Meetbot OpenAPI PHP SDK，提供 116 个 HTTP 接口、13 个 API 模块、316 个模型、23 个枚举和 Webhook 事件分发。

要求 PHP 8.3+、Composer 2；HTTP 使用 Guzzle 7。SDK 不依赖 Laravel、Symfony 或其他业务框架。PHPUnit 12 仅用于开发测试。

## 安装

在本项目目录安装依赖：

```shell
composer install
```

通过 Composer 的 `path` 仓库引用本地 SDK，在应用的 `composer.json` 中配置：

```json
{
  "repositories": [
    {
      "type": "path",
      "url": "../meetbot-openapi-php-sdk",
      "options": {"versions": {"meetbot/meetbot-openapi-php-sdk": "1.0.0"}}
    }
  ],
  "require": {"meetbot/meetbot-openapi-php-sdk": "^1.0"}
}
```

之后在应用项目执行 `composer update meetbot/meetbot-openapi-php-sdk`。

## 快速开始

```php
require 'vendor/autoload.php';

use Meetbot\OpenApi\MeetbotClient;
use Meetbot\OpenApi\MeetbotConfig;

$client = new MeetbotClient(new MeetbotConfig(
    apiKey: getenv('MEETBOT_API_KEY') ?: '',
));

$groups = $client->blocks()->listGroups();
foreach ($groups as $group) {
    echo $group->getGroupId(), ': ', $group->getGroupName(), PHP_EOL;
}
```

默认地址 `https://openapi.meetbot.com`，鉴权头 `APIKEY`，连接超时 10 秒，总请求超时 60 秒。可在 `MeetbotConfig` 中设置 `baseUrl`、`connectTimeout` 和 `timeout`。构造 `MeetbotClient` 时可传入 Guzzle `ClientInterface`，用于代理配置或 Mock 测试。

## 请求与响应模型

模型提供 getter/setter 和链式字段方法。模型构造函数接受数组；嵌套模型自动转换，JSON 字段按协议转换为 snake_case 或 camelCase。

```php
use Meetbot\OpenApi\Model\PageBlockRequest;

$request = new PageBlockRequest(['pageNo' => 1, 'pageSize' => 20]);
$page = $client->blocks()->pageList($request);
$items = $page->getList();

// 也可以直接使用数组，字段名应符合 HTTP 协议。
$page = $client->blocks()->pageList(['pageNo' => 1, 'pageSize' => 20]);
```

API 方法直接返回响应 `result`，列表元素和嵌套对象转换为对应模型；分页结果保留 `total/list`。`StringIdResult`、`LongIdResult`、`BooleanResult` 为结果包装对象，可使用 `getId()` / `isTrue()`。原始 JSON 大整数超过 PHP 整数范围时保留为字符串；客户代码不要将平台 ID 转为浮点数。

模型保留未知字段；`set('future_field', $value)` 可设置扩展参数，`getAdditionalProperties()` 可读取扩展字段。未赋值或为 null 的模型字段不参与 JSON 序列化。需要发送显式 JSON null 时可直接传入请求数组；空 JSON 对象使用 `(object) []`，空列表使用 `[]`。

模块入口：`blocks()`、`messages()`、`templates()`、`customers()`、`accounts()`、`tags()`、`bizSync()`、`flows()`、`catalogs()`、`calling()`、`groups()`、`welcomeMessages()`、`analytics()`。完整方法列表见 [API 索引](docs/api-reference.md)。

接口参数可使用请求对象。例如 `generatePreviewUrl(new BlockPreviewRequest(['blockId' => 123]))`；该接口按现有契约使用 GET JSON body。Flow 上传支持文件路径或可读流：

```php
$result = $client->flows()->updateJson('flow-id', __DIR__ . '/flow.json');
// 流由调用方负责关闭；SDK 打开的本地文件由 SDK 关闭。
$result = $client->flows()->updateJson('flow-id', $stream, 'flow.json');
```

## 错误处理

`MeetbotHttpException` 提供 `statusCode`、`responseBody`、`headers`；`MeetbotApiException` 提供 `apiCode`、`apiMessage`、`traceId`、`responseBody`。连接失败和无效响应抛出 `MeetbotException`。响应正文可能含业务数据，请按客户日志策略脱敏。

SDK 不自动重试请求，以免重复发送消息或重复创建资源；不自动跟随 HTTP 重定向。成功判断规则：优先检查响应 `success`，没有该字段时检查 `code === 0`。

## Webhook

```php
use Meetbot\OpenApi\Webhook\WebhookParser;
use Meetbot\OpenApi\Webhook\WebhookListenerAdapter;

$listener = new class extends WebhookListenerAdapter {
    public function onSendSuccess(mixed $event): void
    {
        $messageId = $event->getMessageId();
        // 在这里处理通知。
    }
};
(new WebhookParser())->dispatch(file_get_contents('php://input'), $listener);
```

支持 17 种回调分发；未知事件进入 `onUnhandled()`。解析与分发不包含应用自身的 Webhook 鉴权、幂等存储或 HTTP 应答逻辑。
