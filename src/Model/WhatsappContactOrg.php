<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappContactOrg extends AbstractModel
{
    protected const FIELDS = [
        'company' => ['company', 'String'],
        'department' => ['department', 'String'],
        'title' => ['title', 'String'],
    ];

    /** @return string|null */
    public function getCompany(): mixed { return $this->get('company'); }
    /** @param string|null $value */
    public function setCompany(mixed $value): void { $this->set('company', $value); }
    /** @param string|null $value */
    public function company(mixed $value): static { return $this->set('company', $value); }

    /** @return string|null */
    public function getDepartment(): mixed { return $this->get('department'); }
    /** @param string|null $value */
    public function setDepartment(mixed $value): void { $this->set('department', $value); }
    /** @param string|null $value */
    public function department(mixed $value): static { return $this->set('department', $value); }

    /** @return string|null */
    public function getTitle(): mixed { return $this->get('title'); }
    /** @param string|null $value */
    public function setTitle(mixed $value): void { $this->set('title', $value); }
    /** @param string|null $value */
    public function title(mixed $value): static { return $this->set('title', $value); }
}
