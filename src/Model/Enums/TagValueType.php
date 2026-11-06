<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model\Enums;

enum TagValueType: string
{
    case STRING = 'STRING';
    case NUMBER = 'NUMBER';
    case TIME = 'TIME';

    public function getValue(): string { return $this->value; }
    public static function fromValue(?string $value): ?self { return $value === null ? null : self::tryFrom($value); }
}
