<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappContactPhone extends AbstractModel
{
    protected const FIELDS = [
        'phone' => ['phone', 'String'],
        'type' => ['type', 'String'],
        'waId' => ['wa_id', 'String'],
    ];

    /** @return string|null */
    public function getPhone(): mixed { return $this->get('phone'); }
    /** @param string|null $value */
    public function setPhone(mixed $value): void { $this->set('phone', $value); }
    /** @param string|null $value */
    public function phone(mixed $value): static { return $this->set('phone', $value); }

    /** @return string|null */
    public function getType(): mixed { return $this->get('type'); }
    /** @param string|null $value */
    public function setType(mixed $value): void { $this->set('type', $value); }
    /** @param string|null $value */
    public function type(mixed $value): static { return $this->set('type', $value); }

    /** @return string|null */
    public function getWaId(): mixed { return $this->get('waId'); }
    /** @param string|null $value */
    public function setWaId(mixed $value): void { $this->set('waId', $value); }
    /** @param string|null $value */
    public function waId(mixed $value): static { return $this->set('waId', $value); }
}
