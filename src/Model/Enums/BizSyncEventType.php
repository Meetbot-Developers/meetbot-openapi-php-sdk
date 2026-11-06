<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model\Enums;

enum BizSyncEventType: string
{
    case CHECKOUT_STARTED = 'CHECKOUT_STARTED';
    case PRODUCT_ADDED_TO_CART = 'PRODUCT_ADDED_TO_CART';
    case ORDER_PAID = 'ORDER_PAID';
    case ORDER_FULFILLED = 'ORDER_FULFILLED';
    case ORDERS_CANCELLED = 'ORDERS_CANCELLED';
    case REFUNDS_CREATE = 'REFUNDS_CREATE';
    case DELIVERED = 'DELIVERED';
    case REGISTRATION_COMPLETED = 'REGISTRATION_COMPLETED';
    case LEAD_SUBMITTED = 'LEAD_SUBMITTED';

    public function getValue(): string { return $this->value; }
    public static function fromValue(?string $value): ?self { return $value === null ? null : self::tryFrom($value); }
}
