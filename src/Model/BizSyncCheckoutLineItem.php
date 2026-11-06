<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class BizSyncCheckoutLineItem extends AbstractModel
{
    protected const FIELDS = [
        'productId' => ['productId', 'String'],
        'title' => ['title', 'String'],
        'sku' => ['sku', 'String'],
        'num' => ['num', 'Long'],
        'price' => ['price', 'BigDecimal'],
        'currency' => ['currency', 'String'],
        'img' => ['img', 'String'],
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

    /** @return float|string|null */
    public function getPrice(): mixed { return $this->get('price'); }
    /** @param float|string|null $value */
    public function setPrice(mixed $value): void { $this->set('price', $value); }
    /** @param float|string|null $value */
    public function price(mixed $value): static { return $this->set('price', $value); }

    /** @return string|null */
    public function getCurrency(): mixed { return $this->get('currency'); }
    /** @param string|null $value */
    public function setCurrency(mixed $value): void { $this->set('currency', $value); }
    /** @param string|null $value */
    public function currency(mixed $value): static { return $this->set('currency', $value); }

    /** @return string|null */
    public function getImg(): mixed { return $this->get('img'); }
    /** @param string|null $value */
    public function setImg(mixed $value): void { $this->set('img', $value); }
    /** @param string|null $value */
    public function img(mixed $value): static { return $this->set('img', $value); }
}
