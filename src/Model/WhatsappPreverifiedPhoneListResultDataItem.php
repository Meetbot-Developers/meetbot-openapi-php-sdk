<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappPreverifiedPhoneListResultDataItem extends AbstractModel
{
    protected const FIELDS = [
        'id' => ['id', 'String'],
        'displayPhoneNumber' => ['display_phone_number', 'String'],
        'codeVerificationStatus' => ['code_verification_status', 'String'],
    ];

    /** @return string|null */
    public function getId(): mixed { return $this->get('id'); }
    /** @param string|null $value */
    public function setId(mixed $value): void { $this->set('id', $value); }
    /** @param string|null $value */
    public function id(mixed $value): static { return $this->set('id', $value); }

    /** @return string|null */
    public function getDisplayPhoneNumber(): mixed { return $this->get('displayPhoneNumber'); }
    /** @param string|null $value */
    public function setDisplayPhoneNumber(mixed $value): void { $this->set('displayPhoneNumber', $value); }
    /** @param string|null $value */
    public function displayPhoneNumber(mixed $value): static { return $this->set('displayPhoneNumber', $value); }

    /** @return string|null */
    public function getCodeVerificationStatus(): mixed { return $this->get('codeVerificationStatus'); }
    /** @param string|null $value */
    public function setCodeVerificationStatus(mixed $value): void { $this->set('codeVerificationStatus', $value); }
    /** @param string|null $value */
    public function codeVerificationStatus(mixed $value): static { return $this->set('codeVerificationStatus', $value); }
}
