<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model\Enums;

enum BizSyncCancelReason: string
{
    case CUSTOMER = 'CUSTOMER';
    case DECLINED = 'DECLINED';
    case FRAUD = 'FRAUD';
    case INVENTORY = 'INVENTORY';
    case OTHER = 'OTHER';
    case STAFF = 'STAFF';

    public function getValue(): string { return $this->value; }
    public static function fromValue(?string $value): ?self { return $value === null ? null : self::tryFrom($value); }
}
