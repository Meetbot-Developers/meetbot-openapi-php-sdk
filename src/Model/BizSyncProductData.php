<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class BizSyncProductData extends AbstractModel
{
    protected const FIELDS = [
        'id' => ['id', 'String'],
        'updateTime' => ['updateTime', 'Long'],
        'productHandle' => ['productHandle', 'String'],
        'productTitle' => ['productTitle', 'String'],
        'productStatus' => ['productStatus', 'String'],
        'productTags' => ['productTags', 'List<String>'],
        'collections' => ['collections', 'List<String>'],
        'productType' => ['productType', 'String'],
        'variantsSkus' => ['variantsSkus', 'List<BizSyncVariantSku>'],
        'productCreateTime' => ['productCreateTime', 'Long'],
        'createTime' => ['createTime', 'Long'],
    ];

    /** @return string|null */
    public function getId(): mixed { return $this->get('id'); }
    /** @param string|null $value */
    public function setId(mixed $value): void { $this->set('id', $value); }
    /** @param string|null $value */
    public function id(mixed $value): static { return $this->set('id', $value); }

    /** @return int|string|null */
    public function getUpdateTime(): mixed { return $this->get('updateTime'); }
    /** @param int|string|null $value */
    public function setUpdateTime(mixed $value): void { $this->set('updateTime', $value); }
    /** @param int|string|null $value */
    public function updateTime(mixed $value): static { return $this->set('updateTime', $value); }

    /** @return string|null */
    public function getProductHandle(): mixed { return $this->get('productHandle'); }
    /** @param string|null $value */
    public function setProductHandle(mixed $value): void { $this->set('productHandle', $value); }
    /** @param string|null $value */
    public function productHandle(mixed $value): static { return $this->set('productHandle', $value); }

    /** @return string|null */
    public function getProductTitle(): mixed { return $this->get('productTitle'); }
    /** @param string|null $value */
    public function setProductTitle(mixed $value): void { $this->set('productTitle', $value); }
    /** @param string|null $value */
    public function productTitle(mixed $value): static { return $this->set('productTitle', $value); }

    /** @return string|null */
    public function getProductStatus(): mixed { return $this->get('productStatus'); }
    /** @param string|null $value */
    public function setProductStatus(mixed $value): void { $this->set('productStatus', $value); }
    /** @param string|null $value */
    public function productStatus(mixed $value): static { return $this->set('productStatus', $value); }

    /** @return list<string>|null */
    public function getProductTags(): mixed { return $this->get('productTags'); }
    /** @param list<string>|null $value */
    public function setProductTags(mixed $value): void { $this->set('productTags', $value); }
    /** @param list<string>|null $value */
    public function productTags(mixed $value): static { return $this->set('productTags', $value); }

    /** @return list<string>|null */
    public function getCollections(): mixed { return $this->get('collections'); }
    /** @param list<string>|null $value */
    public function setCollections(mixed $value): void { $this->set('collections', $value); }
    /** @param list<string>|null $value */
    public function collections(mixed $value): static { return $this->set('collections', $value); }

    /** @return string|null */
    public function getProductType(): mixed { return $this->get('productType'); }
    /** @param string|null $value */
    public function setProductType(mixed $value): void { $this->set('productType', $value); }
    /** @param string|null $value */
    public function productType(mixed $value): static { return $this->set('productType', $value); }

    /** @return list<\Meetbot\OpenApi\Model\BizSyncVariantSku>|null */
    public function getVariantsSkus(): mixed { return $this->get('variantsSkus'); }
    /** @param list<\Meetbot\OpenApi\Model\BizSyncVariantSku>|null $value */
    public function setVariantsSkus(mixed $value): void { $this->set('variantsSkus', $value); }
    /** @param list<\Meetbot\OpenApi\Model\BizSyncVariantSku>|null $value */
    public function variantsSkus(mixed $value): static { return $this->set('variantsSkus', $value); }

    /** @return int|string|null */
    public function getProductCreateTime(): mixed { return $this->get('productCreateTime'); }
    /** @param int|string|null $value */
    public function setProductCreateTime(mixed $value): void { $this->set('productCreateTime', $value); }
    /** @param int|string|null $value */
    public function productCreateTime(mixed $value): static { return $this->set('productCreateTime', $value); }

    /** @return int|string|null */
    public function getCreateTime(): mixed { return $this->get('createTime'); }
    /** @param int|string|null $value */
    public function setCreateTime(mixed $value): void { $this->set('createTime', $value); }
    /** @param int|string|null $value */
    public function createTime(mixed $value): static { return $this->set('createTime', $value); }
}
