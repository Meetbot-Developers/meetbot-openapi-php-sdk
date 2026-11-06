<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class UserSeatResponse extends AbstractModel
{
    protected const FIELDS = [
        'id' => ['id', 'Long'],
        'phone' => ['phone', 'String'],
        'email' => ['email', 'String'],
    ];

    /** @return int|string|null */
    public function getId(): mixed { return $this->get('id'); }
    /** @param int|string|null $value */
    public function setId(mixed $value): void { $this->set('id', $value); }
    /** @param int|string|null $value */
    public function id(mixed $value): static { return $this->set('id', $value); }

    /** @return string|null */
    public function getPhone(): mixed { return $this->get('phone'); }
    /** @param string|null $value */
    public function setPhone(mixed $value): void { $this->set('phone', $value); }
    /** @param string|null $value */
    public function phone(mixed $value): static { return $this->set('phone', $value); }

    /** @return string|null */
    public function getEmail(): mixed { return $this->get('email'); }
    /** @param string|null $value */
    public function setEmail(mixed $value): void { $this->set('email', $value); }
    /** @param string|null $value */
    public function email(mixed $value): static { return $this->set('email', $value); }
}
