<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class CatalogDeleteOpenRequest extends AbstractModel
{
    protected const FIELDS = [
        'catalogId' => ['catalogId', 'String'],
    ];

    /** @return string|null */
    public function getCatalogId(): mixed { return $this->get('catalogId'); }
    /** @param string|null $value */
    public function setCatalogId(mixed $value): void { $this->set('catalogId', $value); }
    /** @param string|null $value */
    public function catalogId(mixed $value): static { return $this->set('catalogId', $value); }
}
