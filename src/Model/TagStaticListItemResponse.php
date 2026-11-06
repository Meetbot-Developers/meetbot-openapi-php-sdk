<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class TagStaticListItemResponse extends AbstractModel
{
    protected const FIELDS = [
        'tagId' => ['tagId', 'String'],
        'name' => ['name', 'String'],
        'description' => ['description', 'String'],
        'valueType' => ['valueType', 'TagValueType'],
        'categoryId' => ['categoryId', 'String'],
        'syncToCustomerService' => ['syncToCustomerService', 'Boolean'],
        'system' => ['system', 'Boolean'],
        'createTime' => ['createTime', 'Long'],
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
    public function getDescription(): mixed { return $this->get('description'); }
    /** @param string|null $value */
    public function setDescription(mixed $value): void { $this->set('description', $value); }
    /** @param string|null $value */
    public function description(mixed $value): static { return $this->set('description', $value); }

    /** @return \Meetbot\OpenApi\Model\Enums\TagValueType|null */
    public function getValueType(): mixed { return $this->get('valueType'); }
    /** @param \Meetbot\OpenApi\Model\Enums\TagValueType|null $value */
    public function setValueType(mixed $value): void { $this->set('valueType', $value); }
    /** @param \Meetbot\OpenApi\Model\Enums\TagValueType|null $value */
    public function valueType(mixed $value): static { return $this->set('valueType', $value); }

    /** @return string|null */
    public function getCategoryId(): mixed { return $this->get('categoryId'); }
    /** @param string|null $value */
    public function setCategoryId(mixed $value): void { $this->set('categoryId', $value); }
    /** @param string|null $value */
    public function categoryId(mixed $value): static { return $this->set('categoryId', $value); }

    /** @return bool|null */
    public function getSyncToCustomerService(): mixed { return $this->get('syncToCustomerService'); }
    /** @param bool|null $value */
    public function setSyncToCustomerService(mixed $value): void { $this->set('syncToCustomerService', $value); }
    /** @param bool|null $value */
    public function syncToCustomerService(mixed $value): static { return $this->set('syncToCustomerService', $value); }

    /** @return bool|null */
    public function getSystem(): mixed { return $this->get('system'); }
    /** @param bool|null $value */
    public function setSystem(mixed $value): void { $this->set('system', $value); }
    /** @param bool|null $value */
    public function system(mixed $value): static { return $this->set('system', $value); }

    /** @return int|string|null */
    public function getCreateTime(): mixed { return $this->get('createTime'); }
    /** @param int|string|null $value */
    public function setCreateTime(mixed $value): void { $this->set('createTime', $value); }
    /** @param int|string|null $value */
    public function createTime(mixed $value): static { return $this->set('createTime', $value); }

    /** @return int|string|null */
    public function getUpdateTime(): mixed { return $this->get('updateTime'); }
    /** @param int|string|null $value */
    public function setUpdateTime(mixed $value): void { $this->set('updateTime', $value); }
    /** @param int|string|null $value */
    public function updateTime(mixed $value): static { return $this->set('updateTime', $value); }
}
