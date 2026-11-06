<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model\Enums;

enum Channel: string
{
    case MESSENGER = 'messenger';
    case INSTAGRAM = 'instagram';
    case WHATSAPP = 'whatsapp';

    public function getValue(): string { return $this->value; }
    public static function fromValue(?string $value): ?self { return $value === null ? null : self::tryFrom($value); }
}
