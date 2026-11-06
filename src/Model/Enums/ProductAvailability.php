<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model\Enums;

enum ProductAvailability: string
{
    case IN_STOCK = 'in stock';
    case OUT_OF_STOCK = 'out of stock';

    public function getValue(): string { return $this->value; }
    public static function fromValue(?string $value): ?self { return $value === null ? null : self::tryFrom($value); }
}
