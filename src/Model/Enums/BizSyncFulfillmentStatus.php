<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model\Enums;

enum BizSyncFulfillmentStatus: string
{
    case UNFULFILLED = 'UNFULFILLED';
    case FULFILLED = 'FULFILLED';
    case PARTIALLY_FULFILLED = 'PARTIALLY_FULFILLED';
    case IN_PROGRESS = 'IN_PROGRESS';
    case ON_HOLD = 'ON_HOLD';
    case SCHEDULED = 'SCHEDULED';
    case REQUEST_DECLINED = 'REQUEST_DECLINED';
    case OPEN = 'OPEN';
    case PENDING_FULFILLMENT = 'PENDING_FULFILLMENT';
    case RESTOCKED = 'RESTOCKED';

    public function getValue(): string { return $this->value; }
    public static function fromValue(?string $value): ?self { return $value === null ? null : self::tryFrom($value); }
}
