<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class ProductEditOpenRequest extends AbstractModel
{
    protected const FIELDS = [
        'productType' => ['productType', 'ProductType'],
        'imageUrl' => ['imageUrl', 'String'],
        'retailerId' => ['retailerId', 'String'],
        'priceCurrency' => ['priceCurrency', 'String'],
        'description' => ['description', 'String'],
        'title' => ['title', 'String'],
        'priceValue' => ['priceValue', 'BigDecimal'],
        'brand' => ['brand', 'String'],
        'productCondition' => ['productCondition', 'ProductCondition'],
        'catalogId' => ['catalogId', 'String'],
        'updateExtendFields' => ['updateExtendFields', 'Boolean'],
        'link' => ['link', 'String'],
        'availability' => ['availability', 'ProductAvailability'],
    ];

    /** @return \Meetbot\OpenApi\Model\Enums\ProductType|null */
    public function getProductType(): mixed { return $this->get('productType'); }
    /** @param \Meetbot\OpenApi\Model\Enums\ProductType|null $value */
    public function setProductType(mixed $value): void { $this->set('productType', $value); }
    /** @param \Meetbot\OpenApi\Model\Enums\ProductType|null $value */
    public function productType(mixed $value): static { return $this->set('productType', $value); }

    /** @return string|null */
    public function getImageUrl(): mixed { return $this->get('imageUrl'); }
    /** @param string|null $value */
    public function setImageUrl(mixed $value): void { $this->set('imageUrl', $value); }
    /** @param string|null $value */
    public function imageUrl(mixed $value): static { return $this->set('imageUrl', $value); }

    /** @return string|null */
    public function getRetailerId(): mixed { return $this->get('retailerId'); }
    /** @param string|null $value */
    public function setRetailerId(mixed $value): void { $this->set('retailerId', $value); }
    /** @param string|null $value */
    public function retailerId(mixed $value): static { return $this->set('retailerId', $value); }

    /** @return string|null */
    public function getPriceCurrency(): mixed { return $this->get('priceCurrency'); }
    /** @param string|null $value */
    public function setPriceCurrency(mixed $value): void { $this->set('priceCurrency', $value); }
    /** @param string|null $value */
    public function priceCurrency(mixed $value): static { return $this->set('priceCurrency', $value); }

    /** @return string|null */
    public function getDescription(): mixed { return $this->get('description'); }
    /** @param string|null $value */
    public function setDescription(mixed $value): void { $this->set('description', $value); }
    /** @param string|null $value */
    public function description(mixed $value): static { return $this->set('description', $value); }

    /** @return string|null */
    public function getTitle(): mixed { return $this->get('title'); }
    /** @param string|null $value */
    public function setTitle(mixed $value): void { $this->set('title', $value); }
    /** @param string|null $value */
    public function title(mixed $value): static { return $this->set('title', $value); }

    /** @return float|string|null */
    public function getPriceValue(): mixed { return $this->get('priceValue'); }
    /** @param float|string|null $value */
    public function setPriceValue(mixed $value): void { $this->set('priceValue', $value); }
    /** @param float|string|null $value */
    public function priceValue(mixed $value): static { return $this->set('priceValue', $value); }

    /** @return string|null */
    public function getBrand(): mixed { return $this->get('brand'); }
    /** @param string|null $value */
    public function setBrand(mixed $value): void { $this->set('brand', $value); }
    /** @param string|null $value */
    public function brand(mixed $value): static { return $this->set('brand', $value); }

    /** @return \Meetbot\OpenApi\Model\Enums\ProductCondition|null */
    public function getProductCondition(): mixed { return $this->get('productCondition'); }
    /** @param \Meetbot\OpenApi\Model\Enums\ProductCondition|null $value */
    public function setProductCondition(mixed $value): void { $this->set('productCondition', $value); }
    /** @param \Meetbot\OpenApi\Model\Enums\ProductCondition|null $value */
    public function productCondition(mixed $value): static { return $this->set('productCondition', $value); }

    /** @return string|null */
    public function getCatalogId(): mixed { return $this->get('catalogId'); }
    /** @param string|null $value */
    public function setCatalogId(mixed $value): void { $this->set('catalogId', $value); }
    /** @param string|null $value */
    public function catalogId(mixed $value): static { return $this->set('catalogId', $value); }

    /** @return bool|null */
    public function getUpdateExtendFields(): mixed { return $this->get('updateExtendFields'); }
    /** @param bool|null $value */
    public function setUpdateExtendFields(mixed $value): void { $this->set('updateExtendFields', $value); }
    /** @param bool|null $value */
    public function updateExtendFields(mixed $value): static { return $this->set('updateExtendFields', $value); }

    /** @return string|null */
    public function getLink(): mixed { return $this->get('link'); }
    /** @param string|null $value */
    public function setLink(mixed $value): void { $this->set('link', $value); }
    /** @param string|null $value */
    public function link(mixed $value): static { return $this->set('link', $value); }

    /** @return \Meetbot\OpenApi\Model\Enums\ProductAvailability|null */
    public function getAvailability(): mixed { return $this->get('availability'); }
    /** @param \Meetbot\OpenApi\Model\Enums\ProductAvailability|null $value */
    public function setAvailability(mixed $value): void { $this->set('availability', $value); }
    /** @param \Meetbot\OpenApi\Model\Enums\ProductAvailability|null $value */
    public function availability(mixed $value): static { return $this->set('availability', $value); }
}
