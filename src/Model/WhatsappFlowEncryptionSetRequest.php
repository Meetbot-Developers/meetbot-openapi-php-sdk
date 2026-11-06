<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappFlowEncryptionSetRequest extends AbstractModel
{
    protected const FIELDS = [
        'phoneNumberId' => ['phoneNumberId', 'String'],
        'businessPublicKey' => ['businessPublicKey', 'String'],
    ];

    /** @return string|null */
    public function getPhoneNumberId(): mixed { return $this->get('phoneNumberId'); }
    /** @param string|null $value */
    public function setPhoneNumberId(mixed $value): void { $this->set('phoneNumberId', $value); }
    /** @param string|null $value */
    public function phoneNumberId(mixed $value): static { return $this->set('phoneNumberId', $value); }

    /** @return string|null */
    public function getBusinessPublicKey(): mixed { return $this->get('businessPublicKey'); }
    /** @param string|null $value */
    public function setBusinessPublicKey(mixed $value): void { $this->set('businessPublicKey', $value); }
    /** @param string|null $value */
    public function businessPublicKey(mixed $value): static { return $this->set('businessPublicKey', $value); }
}
