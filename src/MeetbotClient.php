<?php
declare(strict_types=1);
namespace Meetbot\OpenApi;

use GuzzleHttp\ClientInterface;
use Meetbot\OpenApi\Http\MeetbotHttpClient;

final class MeetbotClient
{
    private readonly MeetbotHttpClient $http;
    private array $apis = [];
    public function __construct(MeetbotConfig $config, ?ClientInterface $httpClient = null)
    {
        $this->http = new MeetbotHttpClient($config, $httpClient);
    }

    public function blocks(): Api\BlockApi
    {
        return $this->apis['blocks'] ??= new Api\BlockApi($this->http);
    }

    public function messages(): Api\MessageApi
    {
        return $this->apis['messages'] ??= new Api\MessageApi($this->http);
    }

    public function templates(): Api\TemplateApi
    {
        return $this->apis['templates'] ??= new Api\TemplateApi($this->http);
    }

    public function customers(): Api\CustomerApi
    {
        return $this->apis['customers'] ??= new Api\CustomerApi($this->http);
    }

    public function accounts(): Api\AccountApi
    {
        return $this->apis['accounts'] ??= new Api\AccountApi($this->http);
    }

    public function tags(): Api\TagApi
    {
        return $this->apis['tags'] ??= new Api\TagApi($this->http);
    }

    public function bizSync(): Api\BizSyncApi
    {
        return $this->apis['bizSync'] ??= new Api\BizSyncApi($this->http);
    }

    public function flows(): Api\FlowApi
    {
        return $this->apis['flows'] ??= new Api\FlowApi($this->http);
    }

    public function catalogs(): Api\CatalogApi
    {
        return $this->apis['catalogs'] ??= new Api\CatalogApi($this->http);
    }

    public function calling(): Api\CallingApi
    {
        return $this->apis['calling'] ??= new Api\CallingApi($this->http);
    }

    public function groups(): Api\GroupApi
    {
        return $this->apis['groups'] ??= new Api\GroupApi($this->http);
    }

    public function welcomeMessages(): Api\WelcomeMessageApi
    {
        return $this->apis['welcomeMessages'] ??= new Api\WelcomeMessageApi($this->http);
    }

    public function analytics(): Api\AnalyticsApi
    {
        return $this->apis['analytics'] ??= new Api\AnalyticsApi($this->http);
    }
}
