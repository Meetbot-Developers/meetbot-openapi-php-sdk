<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappLocationObject extends AbstractModel
{
    protected const FIELDS = [
        'longitude' => ['longitude', 'Double'],
        'latitude' => ['latitude', 'Double'],
        'name' => ['name', 'String'],
        'address' => ['address', 'String'],
    ];

    /** @return float|null */
    public function getLongitude(): mixed { return $this->get('longitude'); }
    /** @param float|null $value */
    public function setLongitude(mixed $value): void { $this->set('longitude', $value); }
    /** @param float|null $value */
    public function longitude(mixed $value): static { return $this->set('longitude', $value); }

    /** @return float|null */
    public function getLatitude(): mixed { return $this->get('latitude'); }
    /** @param float|null $value */
    public function setLatitude(mixed $value): void { $this->set('latitude', $value); }
    /** @param float|null $value */
    public function latitude(mixed $value): static { return $this->set('latitude', $value); }

    /** @return string|null */
    public function getName(): mixed { return $this->get('name'); }
    /** @param string|null $value */
    public function setName(mixed $value): void { $this->set('name', $value); }
    /** @param string|null $value */
    public function name(mixed $value): static { return $this->set('name', $value); }

    /** @return string|null */
    public function getAddress(): mixed { return $this->get('address'); }
    /** @param string|null $value */
    public function setAddress(mixed $value): void { $this->set('address', $value); }
    /** @param string|null $value */
    public function address(mixed $value): static { return $this->set('address', $value); }
}
