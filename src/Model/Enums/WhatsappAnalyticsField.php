<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model\Enums;

enum WhatsappAnalyticsField: string
{
    case ANALYTICS = 'analytics';
    case CONVERSATION_ANALYTICS = 'conversation_analytics';
    case PRICING_ANALYTICS = 'pricing_analytics';
    case TEMPLATE_ANALYTICS = 'template_analytics';
    case TEMPLATE_GROUP_ANALYTICS = 'template_group_analytics';
    case CALL_ANALYTICS = 'call_analytics';
    case GROUP_ANALYTICS = 'group_analytics';

    public function getValue(): string { return $this->value; }
    public static function fromValue(?string $value): ?self { return $value === null ? null : self::tryFrom($value); }
}
