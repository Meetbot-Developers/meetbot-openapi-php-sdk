<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class CatalogItemDTO extends AbstractModel
{
    protected const FIELDS = [
        'catalogId' => ['catalogId', 'String'],
        'catalogName' => ['catalogName', 'String'],
        'boundWabaId' => ['boundWabaId', 'String'],
        'boundWabaName' => ['boundWabaName', 'String'],
        'availability' => ['availability', 'Boolean'],
    ];

    /** @return string|null */
    public function getCatalogId(): mixed { return $this->get('catalogId'); }
    /** @param string|null $value */
    public function setCatalogId(mixed $value): void { $this->set('catalogId', $value); }
    /** @param string|null $value */
    public function catalogId(mixed $value): static { return $this->set('catalogId', $value); }

    /** @return string|null */
    public function getCatalogName(): mixed { return $this->get('catalogName'); }
    /** @param string|null $value */
    public function setCatalogName(mixed $value): void { $this->set('catalogName', $value); }
    /** @param string|null $value */
    public function catalogName(mixed $value): static { return $this->set('catalogName', $value); }

    /** @return string|null */
    public function getBoundWabaId(): mixed { return $this->get('boundWabaId'); }
    /** @param string|null $value */
    public function setBoundWabaId(mixed $value): void { $this->set('boundWabaId', $value); }
    /** @param string|null $value */
    public function boundWabaId(mixed $value): static { return $this->set('boundWabaId', $value); }

    /** @return string|null */
    public function getBoundWabaName(): mixed { return $this->get('boundWabaName'); }
    /** @param string|null $value */
    public function setBoundWabaName(mixed $value): void { $this->set('boundWabaName', $value); }
    /** @param string|null $value */
    public function boundWabaName(mixed $value): static { return $this->set('boundWabaName', $value); }

    /** @return bool|null */
    public function getAvailability(): mixed { return $this->get('availability'); }
    /** @param bool|null $value */
    public function setAvailability(mixed $value): void { $this->set('availability', $value); }
    /** @param bool|null $value */
    public function availability(mixed $value): static { return $this->set('availability', $value); }
}
