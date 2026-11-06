<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class BizSyncSkuItem extends AbstractModel
{
    protected const FIELDS = [
        'productId' => ['productId', 'String'],
        'title' => ['title', 'String'],
        'sku' => ['sku', 'String'],
        'num' => ['num', 'Long'],
        'priceSet' => ['priceSet', 'BizSyncPriceSet'],
    ];

    /** @return string|null */
    public function getProductId(): mixed { return $this->get('productId'); }
    /** @param string|null $value */
    public function setProductId(mixed $value): void { $this->set('productId', $value); }
    /** @param string|null $value */
    public function productId(mixed $value): static { return $this->set('productId', $value); }

    /** @return string|null */
    public function getTitle(): mixed { return $this->get('title'); }
    /** @param string|null $value */
    public function setTitle(mixed $value): void { $this->set('title', $value); }
    /** @param string|null $value */
    public function title(mixed $value): static { return $this->set('title', $value); }

    /** @return string|null */
    public function getSku(): mixed { return $this->get('sku'); }
    /** @param string|null $value */
    public function setSku(mixed $value): void { $this->set('sku', $value); }
    /** @param string|null $value */
    public function sku(mixed $value): static { return $this->set('sku', $value); }

    /** @return int|string|null */
    public function getNum(): mixed { return $this->get('num'); }
    /** @param int|string|null $value */
    public function setNum(mixed $value): void { $this->set('num', $value); }
    /** @param int|string|null $value */
    public function num(mixed $value): static { return $this->set('num', $value); }

    /** @return \Meetbot\OpenApi\Model\BizSyncPriceSet|null */
    public function getPriceSet(): mixed { return $this->get('priceSet'); }
    /** @param \Meetbot\OpenApi\Model\BizSyncPriceSet|null $value */
    public function setPriceSet(mixed $value): void { $this->set('priceSet', $value); }
    /** @param \Meetbot\OpenApi\Model\BizSyncPriceSet|null $value */
    public function priceSet(mixed $value): static { return $this->set('priceSet', $value); }
}
