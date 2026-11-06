<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class CartToggleOpenRequest extends AbstractModel
{
    protected const FIELDS = [
        'phoneNumberId' => ['phoneNumberId', 'String'],
        'enabled' => ['enabled', 'Boolean'],
    ];

    /** @return string|null */
    public function getPhoneNumberId(): mixed { return $this->get('phoneNumberId'); }
    /** @param string|null $value */
    public function setPhoneNumberId(mixed $value): void { $this->set('phoneNumberId', $value); }
    /** @param string|null $value */
    public function phoneNumberId(mixed $value): static { return $this->set('phoneNumberId', $value); }

    /** @return bool|null */
    public function getEnabled(): mixed { return $this->get('enabled'); }
    /** @param bool|null $value */
    public function setEnabled(mixed $value): void { $this->set('enabled', $value); }
    /** @param bool|null $value */
    public function enabled(mixed $value): static { return $this->set('enabled', $value); }
}
