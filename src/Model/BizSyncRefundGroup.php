<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class BizSyncRefundGroup extends AbstractModel
{
    protected const FIELDS = [
        'refundId' => ['refundId', 'String'],
        'refundTime' => ['refundTime', 'Long'],
        'items' => ['items', 'List<BizSyncSkuItem>'],
    ];

    /** @return string|null */
    public function getRefundId(): mixed { return $this->get('refundId'); }
    /** @param string|null $value */
    public function setRefundId(mixed $value): void { $this->set('refundId', $value); }
    /** @param string|null $value */
    public function refundId(mixed $value): static { return $this->set('refundId', $value); }

    /** @return int|string|null */
    public function getRefundTime(): mixed { return $this->get('refundTime'); }
    /** @param int|string|null $value */
    public function setRefundTime(mixed $value): void { $this->set('refundTime', $value); }
    /** @param int|string|null $value */
    public function refundTime(mixed $value): static { return $this->set('refundTime', $value); }

    /** @return list<\Meetbot\OpenApi\Model\BizSyncSkuItem>|null */
    public function getItems(): mixed { return $this->get('items'); }
    /** @param list<\Meetbot\OpenApi\Model\BizSyncSkuItem>|null $value */
    public function setItems(mixed $value): void { $this->set('items', $value); }
    /** @param list<\Meetbot\OpenApi\Model\BizSyncSkuItem>|null $value */
    public function items(mixed $value): static { return $this->set('items', $value); }
}
