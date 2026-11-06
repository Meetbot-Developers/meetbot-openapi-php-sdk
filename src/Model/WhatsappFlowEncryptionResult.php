<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappFlowEncryptionResult extends AbstractModel
{
    protected const FIELDS = [
        'businessPublicKey' => ['business_public_key', 'String'],
        'businessPublicKeyStatus' => ['business_public_key_status', 'String'],
    ];

    /** @return string|null */
    public function getBusinessPublicKey(): mixed { return $this->get('businessPublicKey'); }
    /** @param string|null $value */
    public function setBusinessPublicKey(mixed $value): void { $this->set('businessPublicKey', $value); }
    /** @param string|null $value */
    public function businessPublicKey(mixed $value): static { return $this->set('businessPublicKey', $value); }

    /** @return string|null */
    public function getBusinessPublicKeyStatus(): mixed { return $this->get('businessPublicKeyStatus'); }
    /** @param string|null $value */
    public function setBusinessPublicKeyStatus(mixed $value): void { $this->set('businessPublicKeyStatus', $value); }
    /** @param string|null $value */
    public function businessPublicKeyStatus(mixed $value): static { return $this->set('businessPublicKeyStatus', $value); }
}
