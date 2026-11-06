<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class CustomerChatStatusRequest extends AbstractModel
{
    protected const FIELDS = [
        'customerId' => ['customerId', 'String'],
    ];

    /** @return string|null */
    public function getCustomerId(): mixed { return $this->get('customerId'); }
    /** @param string|null $value */
    public function setCustomerId(mixed $value): void { $this->set('customerId', $value); }
    /** @param string|null $value */
    public function customerId(mixed $value): static { return $this->set('customerId', $value); }
}
