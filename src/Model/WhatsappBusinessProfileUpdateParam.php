<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappBusinessProfileUpdateParam extends AbstractModel
{
    protected const FIELDS = [
        'messagingProduct' => ['messaging_product', 'String'],
        'about' => ['about', 'String'],
        'address' => ['address', 'String'],
        'description' => ['description', 'String'],
        'email' => ['email', 'String'],
        'vertical' => ['vertical', 'WhatsappBusinessVertical'],
        'websites' => ['websites', 'List<String>'],
        'profilePictureHandle' => ['profile_picture_handle', 'String'],
    ];
    protected const DEFAULTS = ['messagingProduct' => "whatsapp"];

    /** @return string|null */
    public function getMessagingProduct(): mixed { return $this->get('messagingProduct'); }
    /** @param string|null $value */
    public function setMessagingProduct(mixed $value): void { $this->set('messagingProduct', $value); }
    /** @param string|null $value */
    public function messagingProduct(mixed $value): static { return $this->set('messagingProduct', $value); }

    /** @return string|null */
    public function getAbout(): mixed { return $this->get('about'); }
    /** @param string|null $value */
    public function setAbout(mixed $value): void { $this->set('about', $value); }
    /** @param string|null $value */
    public function about(mixed $value): static { return $this->set('about', $value); }

    /** @return string|null */
    public function getAddress(): mixed { return $this->get('address'); }
    /** @param string|null $value */
    public function setAddress(mixed $value): void { $this->set('address', $value); }
    /** @param string|null $value */
    public function address(mixed $value): static { return $this->set('address', $value); }

    /** @return string|null */
    public function getDescription(): mixed { return $this->get('description'); }
    /** @param string|null $value */
    public function setDescription(mixed $value): void { $this->set('description', $value); }
    /** @param string|null $value */
    public function description(mixed $value): static { return $this->set('description', $value); }

    /** @return string|null */
    public function getEmail(): mixed { return $this->get('email'); }
    /** @param string|null $value */
    public function setEmail(mixed $value): void { $this->set('email', $value); }
    /** @param string|null $value */
    public function email(mixed $value): static { return $this->set('email', $value); }

    /** @return \Meetbot\OpenApi\Model\Enums\WhatsappBusinessVertical|null */
    public function getVertical(): mixed { return $this->get('vertical'); }
    /** @param \Meetbot\OpenApi\Model\Enums\WhatsappBusinessVertical|null $value */
    public function setVertical(mixed $value): void { $this->set('vertical', $value); }
    /** @param \Meetbot\OpenApi\Model\Enums\WhatsappBusinessVertical|null $value */
    public function vertical(mixed $value): static { return $this->set('vertical', $value); }

    /** @return list<string>|null */
    public function getWebsites(): mixed { return $this->get('websites'); }
    /** @param list<string>|null $value */
    public function setWebsites(mixed $value): void { $this->set('websites', $value); }
    /** @param list<string>|null $value */
    public function websites(mixed $value): static { return $this->set('websites', $value); }

    /** @return string|null */
    public function getProfilePictureHandle(): mixed { return $this->get('profilePictureHandle'); }
    /** @param string|null $value */
    public function setProfilePictureHandle(mixed $value): void { $this->set('profilePictureHandle', $value); }
    /** @param string|null $value */
    public function profilePictureHandle(mixed $value): static { return $this->set('profilePictureHandle', $value); }
}
