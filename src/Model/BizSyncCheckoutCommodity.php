<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class BizSyncCheckoutCommodity extends AbstractModel
{
    protected const FIELDS = [
        'checkoutUrl' => ['checkoutUrl', 'String'],
        'checkoutToken' => ['checkoutToken', 'String'],
        'totalPrice' => ['totalPrice', 'BigDecimal'],
        'currencyCode' => ['currencyCode', 'String'],
        'lineItems' => ['lineItems', 'List<BizSyncCheckoutLineItem>'],
    ];

    /** @return string|null */
    public function getCheckoutUrl(): mixed { return $this->get('checkoutUrl'); }
    /** @param string|null $value */
    public function setCheckoutUrl(mixed $value): void { $this->set('checkoutUrl', $value); }
    /** @param string|null $value */
    public function checkoutUrl(mixed $value): static { return $this->set('checkoutUrl', $value); }

    /** @return string|null */
    public function getCheckoutToken(): mixed { return $this->get('checkoutToken'); }
    /** @param string|null $value */
    public function setCheckoutToken(mixed $value): void { $this->set('checkoutToken', $value); }
    /** @param string|null $value */
    public function checkoutToken(mixed $value): static { return $this->set('checkoutToken', $value); }

    /** @return float|string|null */
    public function getTotalPrice(): mixed { return $this->get('totalPrice'); }
    /** @param float|string|null $value */
    public function setTotalPrice(mixed $value): void { $this->set('totalPrice', $value); }
    /** @param float|string|null $value */
    public function totalPrice(mixed $value): static { return $this->set('totalPrice', $value); }

    /** @return string|null */
    public function getCurrencyCode(): mixed { return $this->get('currencyCode'); }
    /** @param string|null $value */
    public function setCurrencyCode(mixed $value): void { $this->set('currencyCode', $value); }
    /** @param string|null $value */
    public function currencyCode(mixed $value): static { return $this->set('currencyCode', $value); }

    /** @return list<\Meetbot\OpenApi\Model\BizSyncCheckoutLineItem>|null */
    public function getLineItems(): mixed { return $this->get('lineItems'); }
    /** @param list<\Meetbot\OpenApi\Model\BizSyncCheckoutLineItem>|null $value */
    public function setLineItems(mixed $value): void { $this->set('lineItems', $value); }
    /** @param list<\Meetbot\OpenApi\Model\BizSyncCheckoutLineItem>|null $value */
    public function lineItems(mixed $value): static { return $this->set('lineItems', $value); }
}
