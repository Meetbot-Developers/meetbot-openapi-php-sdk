<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model\Enums;

enum SdpType: string
{
    case OFFER = 'offer';
    case ANSWER = 'answer';

    public function getValue(): string { return $this->value; }
    public static function fromValue(?string $value): ?self { return $value === null ? null : self::tryFrom($value); }
}
