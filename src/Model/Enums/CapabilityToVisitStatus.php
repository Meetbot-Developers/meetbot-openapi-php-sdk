<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model\Enums;

enum CapabilityToVisitStatus: string
{
    case VISIBLE = 'VISIBLE';
    case INVISIBLE = 'INVISIBLE';

    public function getValue(): string { return $this->value; }
    public static function fromValue(?string $value): ?self { return $value === null ? null : self::tryFrom($value); }
}
