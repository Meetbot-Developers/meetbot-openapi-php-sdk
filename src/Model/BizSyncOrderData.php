<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class BizSyncOrderData extends AbstractModel
{
    protected const FIELDS = [
        'id' => ['id', 'String'],
        'userId' => ['userId', 'String'],
        'financialStatus' => ['financialStatus', 'BizSyncFinancialStatus'],
        'fulfillmentStatus' => ['fulfillmentStatus', 'BizSyncFulfillmentStatus'],
        'cancelReason' => ['cancelReason', 'BizSyncCancelReason'],
        'totalPriceSet' => ['totalPriceSet', 'BizSyncPriceSet'],
        'orderCreateTime' => ['orderCreateTime', 'Long'],
        'orderPayTime' => ['orderPayTime', 'Long'],
        'orderCancelTime' => ['orderCancelTime', 'Long'],
        'orderName' => ['orderName', 'String'],
        'orderPhone' => ['orderPhone', 'String'],
        'billingPhone' => ['billingPhone', 'String'],
        'contactEmail' => ['contactEmail', 'String'],
        'shippingAddress' => ['shippingAddress', 'BizSyncShippingAddress'],
        'skuPaid' => ['skuPaid', 'List<BizSyncSkuItem>'],
        'skuRefunded' => ['skuRefunded', 'List<BizSyncRefundGroup>'],
        'orderStatusUrl' => ['orderStatusUrl', 'String'],
        'createTime' => ['createTime', 'Long'],
        'updateTime' => ['updateTime', 'Long'],
    ];

    /** @return string|null */
    public function getId(): mixed { return $this->get('id'); }
    /** @param string|null $value */
    public function setId(mixed $value): void { $this->set('id', $value); }
    /** @param string|null $value */
    public function id(mixed $value): static { return $this->set('id', $value); }

    /** @return string|null */
    public function getUserId(): mixed { return $this->get('userId'); }
    /** @param string|null $value */
    public function setUserId(mixed $value): void { $this->set('userId', $value); }
    /** @param string|null $value */
    public function userId(mixed $value): static { return $this->set('userId', $value); }

    /** @return \Meetbot\OpenApi\Model\Enums\BizSyncFinancialStatus|null */
    public function getFinancialStatus(): mixed { return $this->get('financialStatus'); }
    /** @param \Meetbot\OpenApi\Model\Enums\BizSyncFinancialStatus|null $value */
    public function setFinancialStatus(mixed $value): void { $this->set('financialStatus', $value); }
    /** @param \Meetbot\OpenApi\Model\Enums\BizSyncFinancialStatus|null $value */
    public function financialStatus(mixed $value): static { return $this->set('financialStatus', $value); }

    /** @return \Meetbot\OpenApi\Model\Enums\BizSyncFulfillmentStatus|null */
    public function getFulfillmentStatus(): mixed { return $this->get('fulfillmentStatus'); }
    /** @param \Meetbot\OpenApi\Model\Enums\BizSyncFulfillmentStatus|null $value */
    public function setFulfillmentStatus(mixed $value): void { $this->set('fulfillmentStatus', $value); }
    /** @param \Meetbot\OpenApi\Model\Enums\BizSyncFulfillmentStatus|null $value */
    public function fulfillmentStatus(mixed $value): static { return $this->set('fulfillmentStatus', $value); }

    /** @return \Meetbot\OpenApi\Model\Enums\BizSyncCancelReason|null */
    public function getCancelReason(): mixed { return $this->get('cancelReason'); }
    /** @param \Meetbot\OpenApi\Model\Enums\BizSyncCancelReason|null $value */
    public function setCancelReason(mixed $value): void { $this->set('cancelReason', $value); }
    /** @param \Meetbot\OpenApi\Model\Enums\BizSyncCancelReason|null $value */
    public function cancelReason(mixed $value): static { return $this->set('cancelReason', $value); }

    /** @return \Meetbot\OpenApi\Model\BizSyncPriceSet|null */
    public function getTotalPriceSet(): mixed { return $this->get('totalPriceSet'); }
    /** @param \Meetbot\OpenApi\Model\BizSyncPriceSet|null $value */
    public function setTotalPriceSet(mixed $value): void { $this->set('totalPriceSet', $value); }
    /** @param \Meetbot\OpenApi\Model\BizSyncPriceSet|null $value */
    public function totalPriceSet(mixed $value): static { return $this->set('totalPriceSet', $value); }

    /** @return int|string|null */
    public function getOrderCreateTime(): mixed { return $this->get('orderCreateTime'); }
    /** @param int|string|null $value */
    public function setOrderCreateTime(mixed $value): void { $this->set('orderCreateTime', $value); }
    /** @param int|string|null $value */
    public function orderCreateTime(mixed $value): static { return $this->set('orderCreateTime', $value); }

    /** @return int|string|null */
    public function getOrderPayTime(): mixed { return $this->get('orderPayTime'); }
    /** @param int|string|null $value */
    public function setOrderPayTime(mixed $value): void { $this->set('orderPayTime', $value); }
    /** @param int|string|null $value */
    public function orderPayTime(mixed $value): static { return $this->set('orderPayTime', $value); }

    /** @return int|string|null */
    public function getOrderCancelTime(): mixed { return $this->get('orderCancelTime'); }
    /** @param int|string|null $value */
    public function setOrderCancelTime(mixed $value): void { $this->set('orderCancelTime', $value); }
    /** @param int|string|null $value */
    public function orderCancelTime(mixed $value): static { return $this->set('orderCancelTime', $value); }

    /** @return string|null */
    public function getOrderName(): mixed { return $this->get('orderName'); }
    /** @param string|null $value */
    public function setOrderName(mixed $value): void { $this->set('orderName', $value); }
    /** @param string|null $value */
    public function orderName(mixed $value): static { return $this->set('orderName', $value); }

    /** @return string|null */
    public function getOrderPhone(): mixed { return $this->get('orderPhone'); }
    /** @param string|null $value */
    public function setOrderPhone(mixed $value): void { $this->set('orderPhone', $value); }
    /** @param string|null $value */
    public function orderPhone(mixed $value): static { return $this->set('orderPhone', $value); }

    /** @return string|null */
    public function getBillingPhone(): mixed { return $this->get('billingPhone'); }
    /** @param string|null $value */
    public function setBillingPhone(mixed $value): void { $this->set('billingPhone', $value); }
    /** @param string|null $value */
    public function billingPhone(mixed $value): static { return $this->set('billingPhone', $value); }

    /** @return string|null */
    public function getContactEmail(): mixed { return $this->get('contactEmail'); }
    /** @param string|null $value */
    public function setContactEmail(mixed $value): void { $this->set('contactEmail', $value); }
    /** @param string|null $value */
    public function contactEmail(mixed $value): static { return $this->set('contactEmail', $value); }

    /** @return \Meetbot\OpenApi\Model\BizSyncShippingAddress|null */
    public function getShippingAddress(): mixed { return $this->get('shippingAddress'); }
    /** @param \Meetbot\OpenApi\Model\BizSyncShippingAddress|null $value */
    public function setShippingAddress(mixed $value): void { $this->set('shippingAddress', $value); }
    /** @param \Meetbot\OpenApi\Model\BizSyncShippingAddress|null $value */
    public function shippingAddress(mixed $value): static { return $this->set('shippingAddress', $value); }

    /** @return list<\Meetbot\OpenApi\Model\BizSyncSkuItem>|null */
    public function getSkuPaid(): mixed { return $this->get('skuPaid'); }
    /** @param list<\Meetbot\OpenApi\Model\BizSyncSkuItem>|null $value */
    public function setSkuPaid(mixed $value): void { $this->set('skuPaid', $value); }
    /** @param list<\Meetbot\OpenApi\Model\BizSyncSkuItem>|null $value */
    public function skuPaid(mixed $value): static { return $this->set('skuPaid', $value); }

    /** @return list<\Meetbot\OpenApi\Model\BizSyncRefundGroup>|null */
    public function getSkuRefunded(): mixed { return $this->get('skuRefunded'); }
    /** @param list<\Meetbot\OpenApi\Model\BizSyncRefundGroup>|null $value */
    public function setSkuRefunded(mixed $value): void { $this->set('skuRefunded', $value); }
    /** @param list<\Meetbot\OpenApi\Model\BizSyncRefundGroup>|null $value */
    public function skuRefunded(mixed $value): static { return $this->set('skuRefunded', $value); }

    /** @return string|null */
    public function getOrderStatusUrl(): mixed { return $this->get('orderStatusUrl'); }
    /** @param string|null $value */
    public function setOrderStatusUrl(mixed $value): void { $this->set('orderStatusUrl', $value); }
    /** @param string|null $value */
    public function orderStatusUrl(mixed $value): static { return $this->set('orderStatusUrl', $value); }

    /** @return int|string|null */
    public function getCreateTime(): mixed { return $this->get('createTime'); }
    /** @param int|string|null $value */
    public function setCreateTime(mixed $value): void { $this->set('createTime', $value); }
    /** @param int|string|null $value */
    public function createTime(mixed $value): static { return $this->set('createTime', $value); }

    /** @return int|string|null */
    public function getUpdateTime(): mixed { return $this->get('updateTime'); }
    /** @param int|string|null $value */
    public function setUpdateTime(mixed $value): void { $this->set('updateTime', $value); }
    /** @param int|string|null $value */
    public function updateTime(mixed $value): static { return $this->set('updateTime', $value); }
}
