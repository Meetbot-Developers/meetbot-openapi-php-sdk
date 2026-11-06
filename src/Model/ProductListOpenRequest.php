<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class ProductListOpenRequest extends AbstractModel
{
    protected const FIELDS = [
        'catalogId' => ['catalogId', 'String'],
        'title' => ['title', 'String'],
        'retailerId' => ['retailerId', 'String'],
        'availability' => ['availability', 'ProductAvailability'],
        'reviewStatus' => ['reviewStatus', 'CatalogReviewStatus'],
        'capabilityToVisitStatus' => ['capabilityToVisitStatus', 'CapabilityToVisitStatus'],
        'pageNum' => ['pageNum', 'Long'],
        'pageSize' => ['pageSize', 'Long'],
    ];

    /** @return string|null */
    public function getCatalogId(): mixed { return $this->get('catalogId'); }
    /** @param string|null $value */
    public function setCatalogId(mixed $value): void { $this->set('catalogId', $value); }
    /** @param string|null $value */
    public function catalogId(mixed $value): static { return $this->set('catalogId', $value); }

    /** @return string|null */
    public function getTitle(): mixed { return $this->get('title'); }
    /** @param string|null $value */
    public function setTitle(mixed $value): void { $this->set('title', $value); }
    /** @param string|null $value */
    public function title(mixed $value): static { return $this->set('title', $value); }

    /** @return string|null */
    public function getRetailerId(): mixed { return $this->get('retailerId'); }
    /** @param string|null $value */
    public function setRetailerId(mixed $value): void { $this->set('retailerId', $value); }
    /** @param string|null $value */
    public function retailerId(mixed $value): static { return $this->set('retailerId', $value); }

    /** @return \Meetbot\OpenApi\Model\Enums\ProductAvailability|null */
    public function getAvailability(): mixed { return $this->get('availability'); }
    /** @param \Meetbot\OpenApi\Model\Enums\ProductAvailability|null $value */
    public function setAvailability(mixed $value): void { $this->set('availability', $value); }
    /** @param \Meetbot\OpenApi\Model\Enums\ProductAvailability|null $value */
    public function availability(mixed $value): static { return $this->set('availability', $value); }

    /** @return \Meetbot\OpenApi\Model\Enums\CatalogReviewStatus|null */
    public function getReviewStatus(): mixed { return $this->get('reviewStatus'); }
    /** @param \Meetbot\OpenApi\Model\Enums\CatalogReviewStatus|null $value */
    public function setReviewStatus(mixed $value): void { $this->set('reviewStatus', $value); }
    /** @param \Meetbot\OpenApi\Model\Enums\CatalogReviewStatus|null $value */
    public function reviewStatus(mixed $value): static { return $this->set('reviewStatus', $value); }

    /** @return \Meetbot\OpenApi\Model\Enums\CapabilityToVisitStatus|null */
    public function getCapabilityToVisitStatus(): mixed { return $this->get('capabilityToVisitStatus'); }
    /** @param \Meetbot\OpenApi\Model\Enums\CapabilityToVisitStatus|null $value */
    public function setCapabilityToVisitStatus(mixed $value): void { $this->set('capabilityToVisitStatus', $value); }
    /** @param \Meetbot\OpenApi\Model\Enums\CapabilityToVisitStatus|null $value */
    public function capabilityToVisitStatus(mixed $value): static { return $this->set('capabilityToVisitStatus', $value); }

    /** @return int|string|null */
    public function getPageNum(): mixed { return $this->get('pageNum'); }
    /** @param int|string|null $value */
    public function setPageNum(mixed $value): void { $this->set('pageNum', $value); }
    /** @param int|string|null $value */
    public function pageNum(mixed $value): static { return $this->set('pageNum', $value); }

    /** @return int|string|null */
    public function getPageSize(): mixed { return $this->get('pageSize'); }
    /** @param int|string|null $value */
    public function setPageSize(mixed $value): void { $this->set('pageSize', $value); }
    /** @param int|string|null $value */
    public function pageSize(mixed $value): static { return $this->set('pageSize', $value); }
}
