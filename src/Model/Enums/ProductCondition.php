<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model\Enums;

enum ProductCondition: string
{
    case NEW = 'new';
    case REFURBISHED = 'refurbished';
    case USED = 'used';
    case USED_LIKE_NEW = 'used_like_new';
    case USED_GOOD = 'used_good';
    case USED_FAIR = 'used_fair';

    public function getValue(): string { return $this->value; }
    public static function fromValue(?string $value): ?self { return $value === null ? null : self::tryFrom($value); }
}
