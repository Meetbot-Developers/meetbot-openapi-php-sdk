<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model\Enums;

enum WhatsappBusinessVertical: string
{
    case ALCOHOL = 'ALCOHOL';
    case APPAREL = 'APPAREL';
    case AUTO = 'AUTO';
    case BEAUTY = 'BEAUTY';
    case EDU = 'EDU';
    case ENTERTAIN = 'ENTERTAIN';
    case EVENT_PLAN = 'EVENT_PLAN';
    case FINANCE = 'FINANCE';
    case GOVT = 'GOVT';
    case GROCERY = 'GROCERY';
    case HEALTH = 'HEALTH';
    case HOTEL = 'HOTEL';
    case NONPROFIT = 'NONPROFIT';
    case ONLINE_GAMBLING = 'ONLINE_GAMBLING';
    case OTC_DRUGS = 'OTC_DRUGS';
    case OTHER = 'OTHER';
    case PHYSICAL_GAMBLING = 'PHYSICAL_GAMBLING';
    case PROF_SERVICES = 'PROF_SERVICES';
    case RESTAURANT = 'RESTAURANT';
    case RETAIL = 'RETAIL';
    case TRAVEL = 'TRAVEL';

    public function getValue(): string { return $this->value; }
    public static function fromValue(?string $value): ?self { return $value === null ? null : self::tryFrom($value); }
}
