<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model\Enums;

enum WhatsappFlowCategory: string
{
    case SIGN_UP = 'SIGN_UP';
    case SIGN_IN = 'SIGN_IN';
    case APPOINTMENT_BOOKING = 'APPOINTMENT_BOOKING';
    case LEAD_GENERATION = 'LEAD_GENERATION';
    case CONTACT_US = 'CONTACT_US';
    case CUSTOMER_SUPPORT = 'CUSTOMER_SUPPORT';
    case SURVEY = 'SURVEY';
    case OTHER = 'OTHER';

    public function getValue(): string { return $this->value; }
    public static function fromValue(?string $value): ?self { return $value === null ? null : self::tryFrom($value); }
}
