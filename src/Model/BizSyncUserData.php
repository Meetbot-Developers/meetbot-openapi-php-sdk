<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class BizSyncUserData extends AbstractModel
{
    protected const FIELDS = [
        'id' => ['id', 'String'],
        'updateTime' => ['updateTime', 'Long'],
        'mobile' => ['mobile', 'String'],
        'userEmail' => ['userEmail', 'String'],
        'userFirstName' => ['userFirstName', 'String'],
        'userLastName' => ['userLastName', 'String'],
        'country' => ['country', 'String'],
        'city' => ['city', 'String'],
        'company' => ['company', 'String'],
        'createTime' => ['createTime', 'Long'],
    ];

    /** @return string|null */
    public function getId(): mixed { return $this->get('id'); }
    /** @param string|null $value */
    public function setId(mixed $value): void { $this->set('id', $value); }
    /** @param string|null $value */
    public function id(mixed $value): static { return $this->set('id', $value); }

    /** @return int|string|null */
    public function getUpdateTime(): mixed { return $this->get('updateTime'); }
    /** @param int|string|null $value */
    public function setUpdateTime(mixed $value): void { $this->set('updateTime', $value); }
    /** @param int|string|null $value */
    public function updateTime(mixed $value): static { return $this->set('updateTime', $value); }

    /** @return string|null */
    public function getMobile(): mixed { return $this->get('mobile'); }
    /** @param string|null $value */
    public function setMobile(mixed $value): void { $this->set('mobile', $value); }
    /** @param string|null $value */
    public function mobile(mixed $value): static { return $this->set('mobile', $value); }

    /** @return string|null */
    public function getUserEmail(): mixed { return $this->get('userEmail'); }
    /** @param string|null $value */
    public function setUserEmail(mixed $value): void { $this->set('userEmail', $value); }
    /** @param string|null $value */
    public function userEmail(mixed $value): static { return $this->set('userEmail', $value); }

    /** @return string|null */
    public function getUserFirstName(): mixed { return $this->get('userFirstName'); }
    /** @param string|null $value */
    public function setUserFirstName(mixed $value): void { $this->set('userFirstName', $value); }
    /** @param string|null $value */
    public function userFirstName(mixed $value): static { return $this->set('userFirstName', $value); }

    /** @return string|null */
    public function getUserLastName(): mixed { return $this->get('userLastName'); }
    /** @param string|null $value */
    public function setUserLastName(mixed $value): void { $this->set('userLastName', $value); }
    /** @param string|null $value */
    public function userLastName(mixed $value): static { return $this->set('userLastName', $value); }

    /** @return string|null */
    public function getCountry(): mixed { return $this->get('country'); }
    /** @param string|null $value */
    public function setCountry(mixed $value): void { $this->set('country', $value); }
    /** @param string|null $value */
    public function country(mixed $value): static { return $this->set('country', $value); }

    /** @return string|null */
    public function getCity(): mixed { return $this->get('city'); }
    /** @param string|null $value */
    public function setCity(mixed $value): void { $this->set('city', $value); }
    /** @param string|null $value */
    public function city(mixed $value): static { return $this->set('city', $value); }

    /** @return string|null */
    public function getCompany(): mixed { return $this->get('company'); }
    /** @param string|null $value */
    public function setCompany(mixed $value): void { $this->set('company', $value); }
    /** @param string|null $value */
    public function company(mixed $value): static { return $this->set('company', $value); }

    /** @return int|string|null */
    public function getCreateTime(): mixed { return $this->get('createTime'); }
    /** @param int|string|null $value */
    public function setCreateTime(mixed $value): void { $this->set('createTime', $value); }
    /** @param int|string|null $value */
    public function createTime(mixed $value): static { return $this->set('createTime', $value); }
}
