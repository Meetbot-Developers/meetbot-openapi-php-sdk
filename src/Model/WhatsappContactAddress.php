<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappContactAddress extends AbstractModel
{
    protected const FIELDS = [
        'street' => ['street', 'String'],
        'city' => ['city', 'String'],
        'state' => ['state', 'String'],
        'zip' => ['zip', 'String'],
        'country' => ['country', 'String'],
        'countryCode' => ['country_code', 'String'],
        'type' => ['type', 'String'],
    ];

    /** @return string|null */
    public function getStreet(): mixed { return $this->get('street'); }
    /** @param string|null $value */
    public function setStreet(mixed $value): void { $this->set('street', $value); }
    /** @param string|null $value */
    public function street(mixed $value): static { return $this->set('street', $value); }

    /** @return string|null */
    public function getCity(): mixed { return $this->get('city'); }
    /** @param string|null $value */
    public function setCity(mixed $value): void { $this->set('city', $value); }
    /** @param string|null $value */
    public function city(mixed $value): static { return $this->set('city', $value); }

    /** @return string|null */
    public function getState(): mixed { return $this->get('state'); }
    /** @param string|null $value */
    public function setState(mixed $value): void { $this->set('state', $value); }
    /** @param string|null $value */
    public function state(mixed $value): static { return $this->set('state', $value); }

    /** @return string|null */
    public function getZip(): mixed { return $this->get('zip'); }
    /** @param string|null $value */
    public function setZip(mixed $value): void { $this->set('zip', $value); }
    /** @param string|null $value */
    public function zip(mixed $value): static { return $this->set('zip', $value); }

    /** @return string|null */
    public function getCountry(): mixed { return $this->get('country'); }
    /** @param string|null $value */
    public function setCountry(mixed $value): void { $this->set('country', $value); }
    /** @param string|null $value */
    public function country(mixed $value): static { return $this->set('country', $value); }

    /** @return string|null */
    public function getCountryCode(): mixed { return $this->get('countryCode'); }
    /** @param string|null $value */
    public function setCountryCode(mixed $value): void { $this->set('countryCode', $value); }
    /** @param string|null $value */
    public function countryCode(mixed $value): static { return $this->set('countryCode', $value); }

    /** @return string|null */
    public function getType(): mixed { return $this->get('type'); }
    /** @param string|null $value */
    public function setType(mixed $value): void { $this->set('type', $value); }
    /** @param string|null $value */
    public function type(mixed $value): static { return $this->set('type', $value); }
}
