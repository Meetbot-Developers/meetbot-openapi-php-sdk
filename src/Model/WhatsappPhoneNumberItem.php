<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappPhoneNumberItem extends AbstractModel
{
    protected const FIELDS = [
        'displayPhoneNumber' => ['display_phone_number', 'String'],
        'nameStatus' => ['name_status', 'String'],
        'certificate' => ['certificate', 'String'],
        'verifiedName' => ['verified_name', 'String'],
        'newNameStatus' => ['new_name_status', 'String'],
        'id' => ['id', 'String'],
        'codeVerificationStatus' => ['code_verification_status', 'String'],
        'status' => ['status', 'String'],
        'profilePictureUrl' => ['profile_picture_url', 'String'],
    ];

    /** @return string|null */
    public function getDisplayPhoneNumber(): mixed { return $this->get('displayPhoneNumber'); }
    /** @param string|null $value */
    public function setDisplayPhoneNumber(mixed $value): void { $this->set('displayPhoneNumber', $value); }
    /** @param string|null $value */
    public function displayPhoneNumber(mixed $value): static { return $this->set('displayPhoneNumber', $value); }

    /** @return string|null */
    public function getNameStatus(): mixed { return $this->get('nameStatus'); }
    /** @param string|null $value */
    public function setNameStatus(mixed $value): void { $this->set('nameStatus', $value); }
    /** @param string|null $value */
    public function nameStatus(mixed $value): static { return $this->set('nameStatus', $value); }

    /** @return string|null */
    public function getCertificate(): mixed { return $this->get('certificate'); }
    /** @param string|null $value */
    public function setCertificate(mixed $value): void { $this->set('certificate', $value); }
    /** @param string|null $value */
    public function certificate(mixed $value): static { return $this->set('certificate', $value); }

    /** @return string|null */
    public function getVerifiedName(): mixed { return $this->get('verifiedName'); }
    /** @param string|null $value */
    public function setVerifiedName(mixed $value): void { $this->set('verifiedName', $value); }
    /** @param string|null $value */
    public function verifiedName(mixed $value): static { return $this->set('verifiedName', $value); }

    /** @return string|null */
    public function getNewNameStatus(): mixed { return $this->get('newNameStatus'); }
    /** @param string|null $value */
    public function setNewNameStatus(mixed $value): void { $this->set('newNameStatus', $value); }
    /** @param string|null $value */
    public function newNameStatus(mixed $value): static { return $this->set('newNameStatus', $value); }

    /** @return string|null */
    public function getId(): mixed { return $this->get('id'); }
    /** @param string|null $value */
    public function setId(mixed $value): void { $this->set('id', $value); }
    /** @param string|null $value */
    public function id(mixed $value): static { return $this->set('id', $value); }

    /** @return string|null */
    public function getCodeVerificationStatus(): mixed { return $this->get('codeVerificationStatus'); }
    /** @param string|null $value */
    public function setCodeVerificationStatus(mixed $value): void { $this->set('codeVerificationStatus', $value); }
    /** @param string|null $value */
    public function codeVerificationStatus(mixed $value): static { return $this->set('codeVerificationStatus', $value); }

    /** @return string|null */
    public function getStatus(): mixed { return $this->get('status'); }
    /** @param string|null $value */
    public function setStatus(mixed $value): void { $this->set('status', $value); }
    /** @param string|null $value */
    public function status(mixed $value): static { return $this->set('status', $value); }

    /** @return string|null */
    public function getProfilePictureUrl(): mixed { return $this->get('profilePictureUrl'); }
    /** @param string|null $value */
    public function setProfilePictureUrl(mixed $value): void { $this->set('profilePictureUrl', $value); }
    /** @param string|null $value */
    public function profilePictureUrl(mixed $value): static { return $this->set('profilePictureUrl', $value); }
}
