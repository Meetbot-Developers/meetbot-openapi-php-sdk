<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class UserSeatSessionRequest extends AbstractModel
{
    protected const FIELDS = [
        'seatId' => ['seatId', 'Long'],
        'customerId' => ['customerId', 'String'],
    ];

    /** @return int|string|null */
    public function getSeatId(): mixed { return $this->get('seatId'); }
    /** @param int|string|null $value */
    public function setSeatId(mixed $value): void { $this->set('seatId', $value); }
    /** @param int|string|null $value */
    public function seatId(mixed $value): static { return $this->set('seatId', $value); }

    /** @return string|null */
    public function getCustomerId(): mixed { return $this->get('customerId'); }
    /** @param string|null $value */
    public function setCustomerId(mixed $value): void { $this->set('customerId', $value); }
    /** @param string|null $value */
    public function customerId(mixed $value): static { return $this->set('customerId', $value); }
}
