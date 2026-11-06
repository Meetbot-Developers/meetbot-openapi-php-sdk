<?php
declare(strict_types=1);
namespace Meetbot\OpenApi\Exception;
class MeetbotApiException extends MeetbotException
{
    public function __construct(public readonly ?int $apiCode, public readonly string $apiMessage, public readonly ?string $traceId, public readonly string $responseBody)
    {
        parent::__construct($apiMessage, $apiCode ?? 0);
    }
}
