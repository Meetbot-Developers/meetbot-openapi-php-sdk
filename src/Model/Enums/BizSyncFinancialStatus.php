<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model\Enums;

enum BizSyncFinancialStatus: string
{
    case AUTHORIZED = 'AUTHORIZED';
    case PENDING = 'PENDING';
    case PAID = 'PAID';
    case PARTIALLY_PAID = 'PARTIALLY_PAID';
    case PARTIALLY_REFUNDED = 'PARTIALLY_REFUNDED';
    case REFUNDED = 'REFUNDED';
    case VOIDED = 'VOIDED';

    public function getValue(): string { return $this->value; }
    public static function fromValue(?string $value): ?self { return $value === null ? null : self::tryFrom($value); }
}
