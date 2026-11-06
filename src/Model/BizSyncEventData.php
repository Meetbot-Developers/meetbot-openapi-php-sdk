<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class BizSyncEventData extends AbstractModel
{
    protected const FIELDS = [
        'userId' => ['userId', 'String'],
        'leadId' => ['leadId', 'String'],
        'formId' => ['formId', 'String'],
        'clientId' => ['clientId', 'String'],
        'initPhone' => ['initPhone', 'String'],
        'orderPhone' => ['orderPhone', 'String'],
        'addressPhone' => ['addressPhone', 'String'],
        'country' => ['country', 'String'],
        'orderId' => ['orderId', 'String'],
        'user' => ['user', 'BizSyncUserData'],
        'order' => ['order', 'BizSyncOrderData'],
        'fulfillments' => ['fulfillments', 'List<BizSyncFulfillmentSnapshot>'],
        'checkoutCommodity' => ['checkoutCommodity', 'BizSyncCheckoutCommodity'],
        'cancelledLineItems' => ['cancelledLineItems', 'List<BizSyncSkuItem>'],
        'refundLineItems' => ['refundLineItems', 'List<BizSyncSkuItem>'],
        'refundTransactions' => ['refundTransactions', 'List<BizSyncMoney>'],
    ];

    /** @return string|null */
    public function getUserId(): mixed { return $this->get('userId'); }
    /** @param string|null $value */
    public function setUserId(mixed $value): void { $this->set('userId', $value); }
    /** @param string|null $value */
    public function userId(mixed $value): static { return $this->set('userId', $value); }

    /** @return string|null */
    public function getLeadId(): mixed { return $this->get('leadId'); }
    /** @param string|null $value */
    public function setLeadId(mixed $value): void { $this->set('leadId', $value); }
    /** @param string|null $value */
    public function leadId(mixed $value): static { return $this->set('leadId', $value); }

    /** @return string|null */
    public function getFormId(): mixed { return $this->get('formId'); }
    /** @param string|null $value */
    public function setFormId(mixed $value): void { $this->set('formId', $value); }
    /** @param string|null $value */
    public function formId(mixed $value): static { return $this->set('formId', $value); }

    /** @return string|null */
    public function getClientId(): mixed { return $this->get('clientId'); }
    /** @param string|null $value */
    public function setClientId(mixed $value): void { $this->set('clientId', $value); }
    /** @param string|null $value */
    public function clientId(mixed $value): static { return $this->set('clientId', $value); }

    /** @return string|null */
    public function getInitPhone(): mixed { return $this->get('initPhone'); }
    /** @param string|null $value */
    public function setInitPhone(mixed $value): void { $this->set('initPhone', $value); }
    /** @param string|null $value */
    public function initPhone(mixed $value): static { return $this->set('initPhone', $value); }

    /** @return string|null */
    public function getOrderPhone(): mixed { return $this->get('orderPhone'); }
    /** @param string|null $value */
    public function setOrderPhone(mixed $value): void { $this->set('orderPhone', $value); }
    /** @param string|null $value */
    public function orderPhone(mixed $value): static { return $this->set('orderPhone', $value); }

    /** @return string|null */
    public function getAddressPhone(): mixed { return $this->get('addressPhone'); }
    /** @param string|null $value */
    public function setAddressPhone(mixed $value): void { $this->set('addressPhone', $value); }
    /** @param string|null $value */
    public function addressPhone(mixed $value): static { return $this->set('addressPhone', $value); }

    /** @return string|null */
    public function getCountry(): mixed { return $this->get('country'); }
    /** @param string|null $value */
    public function setCountry(mixed $value): void { $this->set('country', $value); }
    /** @param string|null $value */
    public function country(mixed $value): static { return $this->set('country', $value); }

    /** @return string|null */
    public function getOrderId(): mixed { return $this->get('orderId'); }
    /** @param string|null $value */
    public function setOrderId(mixed $value): void { $this->set('orderId', $value); }
    /** @param string|null $value */
    public function orderId(mixed $value): static { return $this->set('orderId', $value); }

    /** @return \Meetbot\OpenApi\Model\BizSyncUserData|null */
    public function getUser(): mixed { return $this->get('user'); }
    /** @param \Meetbot\OpenApi\Model\BizSyncUserData|null $value */
    public function setUser(mixed $value): void { $this->set('user', $value); }
    /** @param \Meetbot\OpenApi\Model\BizSyncUserData|null $value */
    public function user(mixed $value): static { return $this->set('user', $value); }

    /** @return \Meetbot\OpenApi\Model\BizSyncOrderData|null */
    public function getOrder(): mixed { return $this->get('order'); }
    /** @param \Meetbot\OpenApi\Model\BizSyncOrderData|null $value */
    public function setOrder(mixed $value): void { $this->set('order', $value); }
    /** @param \Meetbot\OpenApi\Model\BizSyncOrderData|null $value */
    public function order(mixed $value): static { return $this->set('order', $value); }

    /** @return list<\Meetbot\OpenApi\Model\BizSyncFulfillmentSnapshot>|null */
    public function getFulfillments(): mixed { return $this->get('fulfillments'); }
    /** @param list<\Meetbot\OpenApi\Model\BizSyncFulfillmentSnapshot>|null $value */
    public function setFulfillments(mixed $value): void { $this->set('fulfillments', $value); }
    /** @param list<\Meetbot\OpenApi\Model\BizSyncFulfillmentSnapshot>|null $value */
    public function fulfillments(mixed $value): static { return $this->set('fulfillments', $value); }

    /** @return \Meetbot\OpenApi\Model\BizSyncCheckoutCommodity|null */
    public function getCheckoutCommodity(): mixed { return $this->get('checkoutCommodity'); }
    /** @param \Meetbot\OpenApi\Model\BizSyncCheckoutCommodity|null $value */
    public function setCheckoutCommodity(mixed $value): void { $this->set('checkoutCommodity', $value); }
    /** @param \Meetbot\OpenApi\Model\BizSyncCheckoutCommodity|null $value */
    public function checkoutCommodity(mixed $value): static { return $this->set('checkoutCommodity', $value); }

    /** @return list<\Meetbot\OpenApi\Model\BizSyncSkuItem>|null */
    public function getCancelledLineItems(): mixed { return $this->get('cancelledLineItems'); }
    /** @param list<\Meetbot\OpenApi\Model\BizSyncSkuItem>|null $value */
    public function setCancelledLineItems(mixed $value): void { $this->set('cancelledLineItems', $value); }
    /** @param list<\Meetbot\OpenApi\Model\BizSyncSkuItem>|null $value */
    public function cancelledLineItems(mixed $value): static { return $this->set('cancelledLineItems', $value); }

    /** @return list<\Meetbot\OpenApi\Model\BizSyncSkuItem>|null */
    public function getRefundLineItems(): mixed { return $this->get('refundLineItems'); }
    /** @param list<\Meetbot\OpenApi\Model\BizSyncSkuItem>|null $value */
    public function setRefundLineItems(mixed $value): void { $this->set('refundLineItems', $value); }
    /** @param list<\Meetbot\OpenApi\Model\BizSyncSkuItem>|null $value */
    public function refundLineItems(mixed $value): static { return $this->set('refundLineItems', $value); }

    /** @return list<\Meetbot\OpenApi\Model\BizSyncMoney>|null */
    public function getRefundTransactions(): mixed { return $this->get('refundTransactions'); }
    /** @param list<\Meetbot\OpenApi\Model\BizSyncMoney>|null $value */
    public function setRefundTransactions(mixed $value): void { $this->set('refundTransactions', $value); }
    /** @param list<\Meetbot\OpenApi\Model\BizSyncMoney>|null $value */
    public function refundTransactions(mixed $value): static { return $this->set('refundTransactions', $value); }
}
