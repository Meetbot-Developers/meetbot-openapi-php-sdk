<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class BizSyncPriceSet extends AbstractModel
{
    protected const FIELDS = [
        'shopMoney' => ['shopMoney', 'BizSyncMoney'],
        'presentmentMoney' => ['presentmentMoney', 'BizSyncMoney'],
    ];

    /** @return \Meetbot\OpenApi\Model\BizSyncMoney|null */
    public function getShopMoney(): mixed { return $this->get('shopMoney'); }
    /** @param \Meetbot\OpenApi\Model\BizSyncMoney|null $value */
    public function setShopMoney(mixed $value): void { $this->set('shopMoney', $value); }
    /** @param \Meetbot\OpenApi\Model\BizSyncMoney|null $value */
    public function shopMoney(mixed $value): static { return $this->set('shopMoney', $value); }

    /** @return \Meetbot\OpenApi\Model\BizSyncMoney|null */
    public function getPresentmentMoney(): mixed { return $this->get('presentmentMoney'); }
    /** @param \Meetbot\OpenApi\Model\BizSyncMoney|null $value */
    public function setPresentmentMoney(mixed $value): void { $this->set('presentmentMoney', $value); }
    /** @param \Meetbot\OpenApi\Model\BizSyncMoney|null $value */
    public function presentmentMoney(mixed $value): static { return $this->set('presentmentMoney', $value); }
}
