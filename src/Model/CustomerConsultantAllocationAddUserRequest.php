<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class CustomerConsultantAllocationAddUserRequest extends AbstractModel
{
    protected const FIELDS = [
        'userMobile' => ['userMobile', 'String'],
        'whatsappMobile' => ['whatsappMobile', 'String'],
        'allocationUser' => ['allocationUser', 'String'],
        'labelList' => ['labelList', 'List<String>'],
    ];

    /** @return string|null */
    public function getUserMobile(): mixed { return $this->get('userMobile'); }
    /** @param string|null $value */
    public function setUserMobile(mixed $value): void { $this->set('userMobile', $value); }
    /** @param string|null $value */
    public function userMobile(mixed $value): static { return $this->set('userMobile', $value); }

    /** @return string|null */
    public function getWhatsappMobile(): mixed { return $this->get('whatsappMobile'); }
    /** @param string|null $value */
    public function setWhatsappMobile(mixed $value): void { $this->set('whatsappMobile', $value); }
    /** @param string|null $value */
    public function whatsappMobile(mixed $value): static { return $this->set('whatsappMobile', $value); }

    /** @return string|null */
    public function getAllocationUser(): mixed { return $this->get('allocationUser'); }
    /** @param string|null $value */
    public function setAllocationUser(mixed $value): void { $this->set('allocationUser', $value); }
    /** @param string|null $value */
    public function allocationUser(mixed $value): static { return $this->set('allocationUser', $value); }

    /** @return list<string>|null */
    public function getLabelList(): mixed { return $this->get('labelList'); }
    /** @param list<string>|null $value */
    public function setLabelList(mixed $value): void { $this->set('labelList', $value); }
    /** @param list<string>|null $value */
    public function labelList(mixed $value): static { return $this->set('labelList', $value); }
}
