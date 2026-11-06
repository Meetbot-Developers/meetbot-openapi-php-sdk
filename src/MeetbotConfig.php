<?php
declare(strict_types=1);

namespace Meetbot\OpenApi;

final class MeetbotConfig
{
    public function __construct(
        #[\SensitiveParameter] private readonly string $apiKey,
        public readonly string $baseUrl = 'https://openapi.meetbot.com',
        public readonly float $connectTimeout = 10,
        public readonly float $timeout = 60,
    ) {
        if (trim($apiKey) === '') { throw new \InvalidArgumentException('API key is required'); }
        if (!filter_var($baseUrl, FILTER_VALIDATE_URL) || !in_array(parse_url($baseUrl, PHP_URL_SCHEME), ['https', 'http'], true)) {
            throw new \InvalidArgumentException('Invalid base URL');
        }
        if ($connectTimeout <= 0 || $timeout <= 0) { throw new \InvalidArgumentException('Timeouts must be positive'); }
    }

    public function getApiKey(): string { return $this->apiKey; }
    public function __debugInfo(): array { return ['baseUrl' => $this->baseUrl, 'apiKey' => '[REDACTED]']; }
}
