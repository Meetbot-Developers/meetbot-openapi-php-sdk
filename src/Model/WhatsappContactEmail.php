<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappContactEmail extends AbstractModel
{
    protected const FIELDS = [
        'email' => ['email', 'String'],
        'type' => ['type', 'String'],
    ];

    /** @return string|null */
    public function getEmail(): mixed { return $this->get('email'); }
    /** @param string|null $value */
    public function setEmail(mixed $value): void { $this->set('email', $value); }
    /** @param string|null $value */
    public function email(mixed $value): static { return $this->set('email', $value); }

    /** @return string|null */
    public function getType(): mixed { return $this->get('type'); }
    /** @param string|null $value */
    public function setType(mixed $value): void { $this->set('type', $value); }
    /** @param string|null $value */
    public function type(mixed $value): static { return $this->set('type', $value); }
}
