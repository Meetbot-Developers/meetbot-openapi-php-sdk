<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model\Enums;

enum CatalogReviewStatus: string
{
    case PENDING = 'PENDING';
    case REJECTED = 'REJECTED';
    case APPROVED = 'APPROVED';
    case OUTDATED = 'OUTDATED';

    public function getValue(): string { return $this->value; }
    public static function fromValue(?string $value): ?self { return $value === null ? null : self::tryFrom($value); }
}
