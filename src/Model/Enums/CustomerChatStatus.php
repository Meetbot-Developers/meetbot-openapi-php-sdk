<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model\Enums;

enum CustomerChatStatus: string
{
    case PASS_THREAD_CONTROL = 'PASS_THREAD_CONTROL';
    case TAKE_THREAD_CONTROL = 'TAKE_THREAD_CONTROL';

    public function getValue(): string { return $this->value; }
    public static function fromValue(?string $value): ?self { return $value === null ? null : self::tryFrom($value); }
}
