<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class ProductDetailOpenRequest extends AbstractModel
{
    protected const FIELDS = [
        'catalogId' => ['catalogId', 'String'],
        'retailerId' => ['retailerId', 'String'],
    ];

    /** @return string|null */
    public function getCatalogId(): mixed { return $this->get('catalogId'); }
    /** @param string|null $value */
    public function setCatalogId(mixed $value): void { $this->set('catalogId', $value); }
    /** @param string|null $value */
    public function catalogId(mixed $value): static { return $this->set('catalogId', $value); }

    /** @return string|null */
    public function getRetailerId(): mixed { return $this->get('retailerId'); }
    /** @param string|null $value */
    public function setRetailerId(mixed $value): void { $this->set('retailerId', $value); }
    /** @param string|null $value */
    public function retailerId(mixed $value): static { return $this->set('retailerId', $value); }
}
