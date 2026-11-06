<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model\Enums;

enum WebhookActionType: string
{
    case ADD_USER_LABEL = 'ADD_USER_LABEL';
    case REMOVE_USER_LABEL = 'REMOVE_USER_LABEL';
    case PASS_THREAD_CONTROL = 'PASS_THREAD_CONTROL';
    case TAKE_THREAD_CONTROL = 'TAKE_THREAD_CONTROL';
    case JSON_API = 'JSON_API';

    public function getValue(): string { return $this->value; }
    public static function fromValue(?string $value): ?self { return $value === null ? null : self::tryFrom($value); }
}
