<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model\Enums;

enum SceneType: string
{
    case CUSTOMER_SERVICE_SESSION = 'CUSTOMER_SERVICE_SESSION';
    case MARKETING = 'MARKETING';
    case TRANSACTION_NOTIFICATION = 'TRANSACTION_NOTIFICATION';
    case PRIVATE_DOMAIN_PAYMENT = 'PRIVATE_DOMAIN_PAYMENT';
    case AUTHENTICATION = 'AUTHENTICATION';
    case NO_SCENE = 'NO_SCENE';

    public function getValue(): string { return $this->value; }
    public static function fromValue(?string $value): ?self { return $value === null ? null : self::tryFrom($value); }
}
