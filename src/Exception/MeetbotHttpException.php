<?php
declare(strict_types=1);
namespace Meetbot\OpenApi\Exception;
class MeetbotHttpException extends MeetbotException
{
    public function __construct(public readonly int $statusCode, public readonly string $responseBody, public readonly array $headers = [])
    {
        parent::__construct('Meetbot HTTP request failed: ' . $statusCode, $statusCode);
    }
}
