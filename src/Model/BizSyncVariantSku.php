<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class BizSyncVariantSku extends AbstractModel
{
    protected const FIELDS = [
        'productId' => ['productId', 'String'],
        'sku' => ['sku', 'String'],
        'num' => ['num', 'String'],
    ];

    /** @return string|null */
    public function getProductId(): mixed { return $this->get('productId'); }
    /** @param string|null $value */
    public function setProductId(mixed $value): void { $this->set('productId', $value); }
    /** @param string|null $value */
    public function productId(mixed $value): static { return $this->set('productId', $value); }

    /** @return string|null */
    public function getSku(): mixed { return $this->get('sku'); }
    /** @param string|null $value */
    public function setSku(mixed $value): void { $this->set('sku', $value); }
    /** @param string|null $value */
    public function sku(mixed $value): static { return $this->set('sku', $value); }

    /** @return string|null */
    public function getNum(): mixed { return $this->get('num'); }
    /** @param string|null $value */
    public function setNum(mixed $value): void { $this->set('num', $value); }
    /** @param string|null $value */
    public function num(mixed $value): static { return $this->set('num', $value); }
}
