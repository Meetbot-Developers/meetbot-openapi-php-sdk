<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class BizSyncShippingAddress extends AbstractModel
{
    protected const FIELDS = [
        'firstName' => ['firstName', 'String'],
        'lastName' => ['lastName', 'String'],
        'name' => ['name', 'String'],
        'address1' => ['address1', 'String'],
        'address2' => ['address2', 'String'],
        'city' => ['city', 'String'],
        'province' => ['province', 'String'],
        'zip' => ['zip', 'String'],
        'country' => ['country', 'String'],
        'phone' => ['phone', 'String'],
    ];

    /** @return string|null */
    public function getFirstName(): mixed { return $this->get('firstName'); }
    /** @param string|null $value */
    public function setFirstName(mixed $value): void { $this->set('firstName', $value); }
    /** @param string|null $value */
    public function firstName(mixed $value): static { return $this->set('firstName', $value); }

    /** @return string|null */
    public function getLastName(): mixed { return $this->get('lastName'); }
    /** @param string|null $value */
    public function setLastName(mixed $value): void { $this->set('lastName', $value); }
    /** @param string|null $value */
    public function lastName(mixed $value): static { return $this->set('lastName', $value); }

    /** @return string|null */
    public function getName(): mixed { return $this->get('name'); }
    /** @param string|null $value */
    public function setName(mixed $value): void { $this->set('name', $value); }
    /** @param string|null $value */
    public function name(mixed $value): static { return $this->set('name', $value); }

    /** @return string|null */
    public function getAddress1(): mixed { return $this->get('address1'); }
    /** @param string|null $value */
    public function setAddress1(mixed $value): void { $this->set('address1', $value); }
    /** @param string|null $value */
    public function address1(mixed $value): static { return $this->set('address1', $value); }

    /** @return string|null */
    public function getAddress2(): mixed { return $this->get('address2'); }
    /** @param string|null $value */
    public function setAddress2(mixed $value): void { $this->set('address2', $value); }
    /** @param string|null $value */
    public function address2(mixed $value): static { return $this->set('address2', $value); }

    /** @return string|null */
    public function getCity(): mixed { return $this->get('city'); }
    /** @param string|null $value */
    public function setCity(mixed $value): void { $this->set('city', $value); }
    /** @param string|null $value */
    public function city(mixed $value): static { return $this->set('city', $value); }

    /** @return string|null */
    public function getProvince(): mixed { return $this->get('province'); }
    /** @param string|null $value */
    public function setProvince(mixed $value): void { $this->set('province', $value); }
    /** @param string|null $value */
    public function province(mixed $value): static { return $this->set('province', $value); }

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
    public function getPhone(): mixed { return $this->get('phone'); }
    /** @param string|null $value */
    public function setPhone(mixed $value): void { $this->set('phone', $value); }
    /** @param string|null $value */
    public function phone(mixed $value): static { return $this->set('phone', $value); }
}
