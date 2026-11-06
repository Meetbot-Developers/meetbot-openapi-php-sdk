<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class BizSyncMoney extends AbstractModel
{
    protected const FIELDS = [
        'amount' => ['amount', 'String'],
        'currencyCode' => ['currencyCode', 'String'],
    ];

    /** @return string|null */
    public function getAmount(): mixed { return $this->get('amount'); }
    /** @param string|null $value */
    public function setAmount(mixed $value): void { $this->set('amount', $value); }
    /** @param string|null $value */
    public function amount(mixed $value): static { return $this->set('amount', $value); }

    /** @return string|null */
    public function getCurrencyCode(): mixed { return $this->get('currencyCode'); }
    /** @param string|null $value */
    public function setCurrencyCode(mixed $value): void { $this->set('currencyCode', $value); }
    /** @param string|null $value */
    public function currencyCode(mixed $value): static { return $this->set('currencyCode', $value); }
}
