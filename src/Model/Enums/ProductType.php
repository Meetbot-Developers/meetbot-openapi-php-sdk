<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model\Enums;

enum ProductType: string
{
    case PHYSICAL = 'PHYSICAL';
    case VIRTUAL = 'VIRTUAL';

    public function getValue(): string { return $this->value; }
    public static function fromValue(?string $value): ?self { return $value === null ? null : self::tryFrom($value); }
}
