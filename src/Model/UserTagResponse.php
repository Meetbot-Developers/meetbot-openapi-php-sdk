<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class UserTagResponse extends AbstractModel
{
    protected const FIELDS = [
        'tagId' => ['tagId', 'String'],
        'name' => ['name', 'String'],
        'system' => ['system', 'Boolean'],
        'syncToCustomerService' => ['syncToCustomerService', 'Boolean'],
        'description' => ['description', 'String'],
        'tagValues' => ['tagValues', 'List<UserTagValueResponse>'],
    ];

    /** @return string|null */
    public function getTagId(): mixed { return $this->get('tagId'); }
    /** @param string|null $value */
    public function setTagId(mixed $value): void { $this->set('tagId', $value); }
    /** @param string|null $value */
    public function tagId(mixed $value): static { return $this->set('tagId', $value); }

    /** @return string|null */
    public function getName(): mixed { return $this->get('name'); }
    /** @param string|null $value */
    public function setName(mixed $value): void { $this->set('name', $value); }
    /** @param string|null $value */
    public function name(mixed $value): static { return $this->set('name', $value); }

    /** @return bool|null */
    public function getSystem(): mixed { return $this->get('system'); }
    /** @param bool|null $value */
    public function setSystem(mixed $value): void { $this->set('system', $value); }
    /** @param bool|null $value */
    public function system(mixed $value): static { return $this->set('system', $value); }

    /** @return bool|null */
    public function getSyncToCustomerService(): mixed { return $this->get('syncToCustomerService'); }
    /** @param bool|null $value */
    public function setSyncToCustomerService(mixed $value): void { $this->set('syncToCustomerService', $value); }
    /** @param bool|null $value */
    public function syncToCustomerService(mixed $value): static { return $this->set('syncToCustomerService', $value); }

    /** @return string|null */
    public function getDescription(): mixed { return $this->get('description'); }
    /** @param string|null $value */
    public function setDescription(mixed $value): void { $this->set('description', $value); }
    /** @param string|null $value */
    public function description(mixed $value): static { return $this->set('description', $value); }

    /** @return list<\Meetbot\OpenApi\Model\UserTagValueResponse>|null */
    public function getTagValues(): mixed { return $this->get('tagValues'); }
    /** @param list<\Meetbot\OpenApi\Model\UserTagValueResponse>|null $value */
    public function setTagValues(mixed $value): void { $this->set('tagValues', $value); }
    /** @param list<\Meetbot\OpenApi\Model\UserTagValueResponse>|null $value */
    public function tagValues(mixed $value): static { return $this->set('tagValues', $value); }
}
