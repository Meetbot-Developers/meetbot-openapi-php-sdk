<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappBusinessProfileItem extends AbstractModel
{
    protected const FIELDS = [
        'address' => ['address', 'String'],
        'profilePictureUrl' => ['profile_picture_url', 'String'],
        'messagingProduct' => ['messaging_product', 'String'],
        'about' => ['about', 'String'],
        'description' => ['description', 'String'],
        'email' => ['email', 'String'],
        'websites' => ['websites', 'List<String>'],
        'vertical' => ['vertical', 'String'],
    ];

    /** @return string|null */
    public function getAddress(): mixed { return $this->get('address'); }
    /** @param string|null $value */
    public function setAddress(mixed $value): void { $this->set('address', $value); }
    /** @param string|null $value */
    public function address(mixed $value): static { return $this->set('address', $value); }

    /** @return string|null */
    public function getProfilePictureUrl(): mixed { return $this->get('profilePictureUrl'); }
    /** @param string|null $value */
    public function setProfilePictureUrl(mixed $value): void { $this->set('profilePictureUrl', $value); }
    /** @param string|null $value */
    public function profilePictureUrl(mixed $value): static { return $this->set('profilePictureUrl', $value); }

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

    /** @return list<string>|null */
    public function getWebsites(): mixed { return $this->get('websites'); }
    /** @param list<string>|null $value */
    public function setWebsites(mixed $value): void { $this->set('websites', $value); }
    /** @param list<string>|null $value */
    public function websites(mixed $value): static { return $this->set('websites', $value); }

    /** @return string|null */
    public function getVertical(): mixed { return $this->get('vertical'); }
    /** @param string|null $value */
    public function setVertical(mixed $value): void { $this->set('vertical', $value); }
    /** @param string|null $value */
    public function vertical(mixed $value): static { return $this->set('vertical', $value); }
}
