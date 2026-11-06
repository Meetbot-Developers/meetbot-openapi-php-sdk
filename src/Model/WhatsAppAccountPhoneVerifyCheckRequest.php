<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsAppAccountPhoneVerifyCheckRequest extends AbstractModel
{
    protected const FIELDS = [
        'phoneNumberId' => ['phoneNumberId', 'String'],
        'code' => ['code', 'String'],
    ];

    /** @return string|null */
    public function getPhoneNumberId(): mixed { return $this->get('phoneNumberId'); }
    /** @param string|null $value */
    public function setPhoneNumberId(mixed $value): void { $this->set('phoneNumberId', $value); }
    /** @param string|null $value */
    public function phoneNumberId(mixed $value): static { return $this->set('phoneNumberId', $value); }

    /** @return string|null */
    public function getCode(): mixed { return $this->get('code'); }
    /** @param string|null $value */
    public function setCode(mixed $value): void { $this->set('code', $value); }
    /** @param string|null $value */
    public function code(mixed $value): static { return $this->set('code', $value); }
}
