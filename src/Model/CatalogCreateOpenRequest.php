<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class CatalogCreateOpenRequest extends AbstractModel
{
    protected const FIELDS = [
        'businessId' => ['businessId', 'String'],
        'catalogName' => ['catalogName', 'String'],
    ];

    /** @return string|null */
    public function getBusinessId(): mixed { return $this->get('businessId'); }
    /** @param string|null $value */
    public function setBusinessId(mixed $value): void { $this->set('businessId', $value); }
    /** @param string|null $value */
    public function businessId(mixed $value): static { return $this->set('businessId', $value); }

    /** @return string|null */
    public function getCatalogName(): mixed { return $this->get('catalogName'); }
    /** @param string|null $value */
    public function setCatalogName(mixed $value): void { $this->set('catalogName', $value); }
    /** @param string|null $value */
    public function catalogName(mixed $value): static { return $this->set('catalogName', $value); }
}
