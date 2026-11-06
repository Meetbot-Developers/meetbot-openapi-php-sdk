<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class UpdateStaticTagRequest extends AbstractModel
{
    protected const FIELDS = [
        'tagId' => ['tagId', 'String'],
        'name' => ['name', 'String'],
        'categoryId' => ['categoryId', 'String'],
        'description' => ['description', 'String'],
        'values' => ['values', 'List<UpdateStaticTagRequestValuesItem>'],
        'syncToCustomerService' => ['syncToCustomerService', 'Boolean'],
        'updateTime' => ['updateTime', 'Long'],
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

    /** @return string|null */
    public function getCategoryId(): mixed { return $this->get('categoryId'); }
    /** @param string|null $value */
    public function setCategoryId(mixed $value): void { $this->set('categoryId', $value); }
    /** @param string|null $value */
    public function categoryId(mixed $value): static { return $this->set('categoryId', $value); }

    /** @return string|null */
    public function getDescription(): mixed { return $this->get('description'); }
    /** @param string|null $value */
    public function setDescription(mixed $value): void { $this->set('description', $value); }
    /** @param string|null $value */
    public function description(mixed $value): static { return $this->set('description', $value); }

    /** @return list<\Meetbot\OpenApi\Model\UpdateStaticTagRequestValuesItem>|null */
    public function getValues(): mixed { return $this->get('values'); }
    /** @param list<\Meetbot\OpenApi\Model\UpdateStaticTagRequestValuesItem>|null $value */
    public function setValues(mixed $value): void { $this->set('values', $value); }
    /** @param list<\Meetbot\OpenApi\Model\UpdateStaticTagRequestValuesItem>|null $value */
    public function values(mixed $value): static { return $this->set('values', $value); }

    /** @return bool|null */
    public function getSyncToCustomerService(): mixed { return $this->get('syncToCustomerService'); }
    /** @param bool|null $value */
    public function setSyncToCustomerService(mixed $value): void { $this->set('syncToCustomerService', $value); }
    /** @param bool|null $value */
    public function syncToCustomerService(mixed $value): static { return $this->set('syncToCustomerService', $value); }

    /** @return int|string|null */
    public function getUpdateTime(): mixed { return $this->get('updateTime'); }
    /** @param int|string|null $value */
    public function setUpdateTime(mixed $value): void { $this->set('updateTime', $value); }
    /** @param int|string|null $value */
    public function updateTime(mixed $value): static { return $this->set('updateTime', $value); }
}
