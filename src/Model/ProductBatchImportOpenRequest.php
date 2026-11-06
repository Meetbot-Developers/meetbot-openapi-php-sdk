<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class ProductBatchImportOpenRequest extends AbstractModel
{
    protected const FIELDS = [
        'catalogId' => ['catalogId', 'String'],
        'url' => ['url', 'String'],
    ];

    /** @return string|null */
    public function getCatalogId(): mixed { return $this->get('catalogId'); }
    /** @param string|null $value */
    public function setCatalogId(mixed $value): void { $this->set('catalogId', $value); }
    /** @param string|null $value */
    public function catalogId(mixed $value): static { return $this->set('catalogId', $value); }

    /** @return string|null */
    public function getUrl(): mixed { return $this->get('url'); }
    /** @param string|null $value */
    public function setUrl(mixed $value): void { $this->set('url', $value); }
    /** @param string|null $value */
    public function url(mixed $value): static { return $this->set('url', $value); }
}
