<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class BizSyncFulfillmentSnapshot extends AbstractModel
{
    protected const FIELDS = [
        'trackingCompany' => ['trackingCompany', 'String'],
        'trackingNumber' => ['trackingNumber', 'String'],
        'trackingNumbers' => ['trackingNumbers', 'List<String>'],
        'trackingUrl' => ['trackingUrl', 'String'],
        'lineItems' => ['lineItems', 'List<BizSyncSkuItem>'],
    ];

    /** @return string|null */
    public function getTrackingCompany(): mixed { return $this->get('trackingCompany'); }
    /** @param string|null $value */
    public function setTrackingCompany(mixed $value): void { $this->set('trackingCompany', $value); }
    /** @param string|null $value */
    public function trackingCompany(mixed $value): static { return $this->set('trackingCompany', $value); }

    /** @return string|null */
    public function getTrackingNumber(): mixed { return $this->get('trackingNumber'); }
    /** @param string|null $value */
    public function setTrackingNumber(mixed $value): void { $this->set('trackingNumber', $value); }
    /** @param string|null $value */
    public function trackingNumber(mixed $value): static { return $this->set('trackingNumber', $value); }

    /** @return list<string>|null */
    public function getTrackingNumbers(): mixed { return $this->get('trackingNumbers'); }
    /** @param list<string>|null $value */
    public function setTrackingNumbers(mixed $value): void { $this->set('trackingNumbers', $value); }
    /** @param list<string>|null $value */
    public function trackingNumbers(mixed $value): static { return $this->set('trackingNumbers', $value); }

    /** @return string|null */
    public function getTrackingUrl(): mixed { return $this->get('trackingUrl'); }
    /** @param string|null $value */
    public function setTrackingUrl(mixed $value): void { $this->set('trackingUrl', $value); }
    /** @param string|null $value */
    public function trackingUrl(mixed $value): static { return $this->set('trackingUrl', $value); }

    /** @return list<\Meetbot\OpenApi\Model\BizSyncSkuItem>|null */
    public function getLineItems(): mixed { return $this->get('lineItems'); }
    /** @param list<\Meetbot\OpenApi\Model\BizSyncSkuItem>|null $value */
    public function setLineItems(mixed $value): void { $this->set('lineItems', $value); }
    /** @param list<\Meetbot\OpenApi\Model\BizSyncSkuItem>|null $value */
    public function lineItems(mixed $value): static { return $this->set('lineItems', $value); }
}
