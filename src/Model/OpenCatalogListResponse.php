<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class OpenCatalogListResponse extends AbstractModel
{
    protected const FIELDS = [
        'businessId' => ['businessId', 'String'],
        'catalogs' => ['catalogs', 'List<CatalogItemDTO>'],
    ];

    /** @return string|null */
    public function getBusinessId(): mixed { return $this->get('businessId'); }
    /** @param string|null $value */
    public function setBusinessId(mixed $value): void { $this->set('businessId', $value); }
    /** @param string|null $value */
    public function businessId(mixed $value): static { return $this->set('businessId', $value); }

    /** @return list<\Meetbot\OpenApi\Model\CatalogItemDTO>|null */
    public function getCatalogs(): mixed { return $this->get('catalogs'); }
    /** @param list<\Meetbot\OpenApi\Model\CatalogItemDTO>|null $value */
    public function setCatalogs(mixed $value): void { $this->set('catalogs', $value); }
    /** @param list<\Meetbot\OpenApi\Model\CatalogItemDTO>|null $value */
    public function catalogs(mixed $value): static { return $this->set('catalogs', $value); }
}
