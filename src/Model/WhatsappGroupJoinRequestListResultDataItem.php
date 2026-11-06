<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappGroupJoinRequestListResultDataItem extends AbstractModel
{
    protected const FIELDS = [
        'phoneNumber' => ['phone_number', 'String'],
        'requestedAt' => ['requested_at', 'String'],
    ];

    /** @return string|null */
    public function getPhoneNumber(): mixed { return $this->get('phoneNumber'); }
    /** @param string|null $value */
    public function setPhoneNumber(mixed $value): void { $this->set('phoneNumber', $value); }
    /** @param string|null $value */
    public function phoneNumber(mixed $value): static { return $this->set('phoneNumber', $value); }

    /** @return string|null */
    public function getRequestedAt(): mixed { return $this->get('requestedAt'); }
    /** @param string|null $value */
    public function setRequestedAt(mixed $value): void { $this->set('requestedAt', $value); }
    /** @param string|null $value */
    public function requestedAt(mixed $value): static { return $this->set('requestedAt', $value); }
}
