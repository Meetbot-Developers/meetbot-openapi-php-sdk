<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class CatalogProductResponse extends AbstractModel
{
    protected const FIELDS = [
        'id' => ['id', 'Long'],
        'catalogId' => ['catalogId', 'String'],
        'retailerId' => ['retailerId', 'String'],
        'metaProductId' => ['metaProductId', 'String'],
        'title' => ['title', 'String'],
        'imageUrl' => ['imageUrl', 'String'],
        'imageKey' => ['imageKey', 'String'],
        'productType' => ['productType', 'ProductType'],
        'productCondition' => ['productCondition', 'ProductCondition'],
        'brand' => ['brand', 'String'],
        'description' => ['description', 'String'],
        'priceValue' => ['priceValue', 'BigDecimal'],
        'priceCurrency' => ['priceCurrency', 'String'],
        'availability' => ['availability', 'ProductAvailability'],
        'link' => ['link', 'String'],
        'reviewStatus' => ['reviewStatus', 'CatalogReviewStatus'],
        'capabilityToVisitStatus' => ['capabilityToVisitStatus', 'CapabilityToVisitStatus'],
        'createdAt' => ['createdAt', 'Long'],
        'updatedAt' => ['updatedAt', 'Long'],
        'extendFields' => ['extendFields', 'List<CommerceOrderExtendFieldDefResponse>'],
    ];

    /** @return int|string|null */
    public function getId(): mixed { return $this->get('id'); }
    /** @param int|string|null $value */
    public function setId(mixed $value): void { $this->set('id', $value); }
    /** @param int|string|null $value */
    public function id(mixed $value): static { return $this->set('id', $value); }

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

    /** @return string|null */
    public function getMetaProductId(): mixed { return $this->get('metaProductId'); }
    /** @param string|null $value */
    public function setMetaProductId(mixed $value): void { $this->set('metaProductId', $value); }
    /** @param string|null $value */
    public function metaProductId(mixed $value): static { return $this->set('metaProductId', $value); }

    /** @return string|null */
    public function getTitle(): mixed { return $this->get('title'); }
    /** @param string|null $value */
    public function setTitle(mixed $value): void { $this->set('title', $value); }
    /** @param string|null $value */
    public function title(mixed $value): static { return $this->set('title', $value); }

    /** @return string|null */
    public function getImageUrl(): mixed { return $this->get('imageUrl'); }
    /** @param string|null $value */
    public function setImageUrl(mixed $value): void { $this->set('imageUrl', $value); }
    /** @param string|null $value */
    public function imageUrl(mixed $value): static { return $this->set('imageUrl', $value); }

    /** @return string|null */
    public function getImageKey(): mixed { return $this->get('imageKey'); }
    /** @param string|null $value */
    public function setImageKey(mixed $value): void { $this->set('imageKey', $value); }
    /** @param string|null $value */
    public function imageKey(mixed $value): static { return $this->set('imageKey', $value); }

    /** @return \Meetbot\OpenApi\Model\Enums\ProductType|null */
    public function getProductType(): mixed { return $this->get('productType'); }
    /** @param \Meetbot\OpenApi\Model\Enums\ProductType|null $value */
    public function setProductType(mixed $value): void { $this->set('productType', $value); }
    /** @param \Meetbot\OpenApi\Model\Enums\ProductType|null $value */
    public function productType(mixed $value): static { return $this->set('productType', $value); }

    /** @return \Meetbot\OpenApi\Model\Enums\ProductCondition|null */
    public function getProductCondition(): mixed { return $this->get('productCondition'); }
    /** @param \Meetbot\OpenApi\Model\Enums\ProductCondition|null $value */
    public function setProductCondition(mixed $value): void { $this->set('productCondition', $value); }
    /** @param \Meetbot\OpenApi\Model\Enums\ProductCondition|null $value */
    public function productCondition(mixed $value): static { return $this->set('productCondition', $value); }

    /** @return string|null */
    public function getBrand(): mixed { return $this->get('brand'); }
    /** @param string|null $value */
    public function setBrand(mixed $value): void { $this->set('brand', $value); }
    /** @param string|null $value */
    public function brand(mixed $value): static { return $this->set('brand', $value); }

    /** @return string|null */
    public function getDescription(): mixed { return $this->get('description'); }
    /** @param string|null $value */
    public function setDescription(mixed $value): void { $this->set('description', $value); }
    /** @param string|null $value */
    public function description(mixed $value): static { return $this->set('description', $value); }

    /** @return float|string|null */
    public function getPriceValue(): mixed { return $this->get('priceValue'); }
    /** @param float|string|null $value */
    public function setPriceValue(mixed $value): void { $this->set('priceValue', $value); }
    /** @param float|string|null $value */
    public function priceValue(mixed $value): static { return $this->set('priceValue', $value); }

    /** @return string|null */
    public function getPriceCurrency(): mixed { return $this->get('priceCurrency'); }
    /** @param string|null $value */
    public function setPriceCurrency(mixed $value): void { $this->set('priceCurrency', $value); }
    /** @param string|null $value */
    public function priceCurrency(mixed $value): static { return $this->set('priceCurrency', $value); }

    /** @return \Meetbot\OpenApi\Model\Enums\ProductAvailability|null */
    public function getAvailability(): mixed { return $this->get('availability'); }
    /** @param \Meetbot\OpenApi\Model\Enums\ProductAvailability|null $value */
    public function setAvailability(mixed $value): void { $this->set('availability', $value); }
    /** @param \Meetbot\OpenApi\Model\Enums\ProductAvailability|null $value */
    public function availability(mixed $value): static { return $this->set('availability', $value); }

    /** @return string|null */
    public function getLink(): mixed { return $this->get('link'); }
    /** @param string|null $value */
    public function setLink(mixed $value): void { $this->set('link', $value); }
    /** @param string|null $value */
    public function link(mixed $value): static { return $this->set('link', $value); }

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
    public function getCreatedAt(): mixed { return $this->get('createdAt'); }
    /** @param int|string|null $value */
    public function setCreatedAt(mixed $value): void { $this->set('createdAt', $value); }
    /** @param int|string|null $value */
    public function createdAt(mixed $value): static { return $this->set('createdAt', $value); }

    /** @return int|string|null */
    public function getUpdatedAt(): mixed { return $this->get('updatedAt'); }
    /** @param int|string|null $value */
    public function setUpdatedAt(mixed $value): void { $this->set('updatedAt', $value); }
    /** @param int|string|null $value */
    public function updatedAt(mixed $value): static { return $this->set('updatedAt', $value); }

    /** @return list<\Meetbot\OpenApi\Model\CommerceOrderExtendFieldDefResponse>|null */
    public function getExtendFields(): mixed { return $this->get('extendFields'); }
    /** @param list<\Meetbot\OpenApi\Model\CommerceOrderExtendFieldDefResponse>|null $value */
    public function setExtendFields(mixed $value): void { $this->set('extendFields', $value); }
    /** @param list<\Meetbot\OpenApi\Model\CommerceOrderExtendFieldDefResponse>|null $value */
    public function extendFields(mixed $value): static { return $this->set('extendFields', $value); }
}
