<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class CreateStaticTagRequest extends AbstractModel
{
    protected const FIELDS = [
        'name' => ['name', 'String'],
        'categoryId' => ['categoryId', 'String'],
        'valueType' => ['valueType', 'TagValueType'],
        'description' => ['description', 'String'],
        'values' => ['values', 'List<CreateStaticTagRequestValuesItem>'],
        'syncToCustomerService' => ['syncToCustomerService', 'Boolean'],
    ];

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

    /** @return \Meetbot\OpenApi\Model\Enums\TagValueType|null */
    public function getValueType(): mixed { return $this->get('valueType'); }
    /** @param \Meetbot\OpenApi\Model\Enums\TagValueType|null $value */
    public function setValueType(mixed $value): void { $this->set('valueType', $value); }
    /** @param \Meetbot\OpenApi\Model\Enums\TagValueType|null $value */
    public function valueType(mixed $value): static { return $this->set('valueType', $value); }

    /** @return string|null */
    public function getDescription(): mixed { return $this->get('description'); }
    /** @param string|null $value */
    public function setDescription(mixed $value): void { $this->set('description', $value); }
    /** @param string|null $value */
    public function description(mixed $value): static { return $this->set('description', $value); }

    /** @return list<\Meetbot\OpenApi\Model\CreateStaticTagRequestValuesItem>|null */
    public function getValues(): mixed { return $this->get('values'); }
    /** @param list<\Meetbot\OpenApi\Model\CreateStaticTagRequestValuesItem>|null $value */
    public function setValues(mixed $value): void { $this->set('values', $value); }
    /** @param list<\Meetbot\OpenApi\Model\CreateStaticTagRequestValuesItem>|null $value */
    public function values(mixed $value): static { return $this->set('values', $value); }

    /** @return bool|null */
    public function getSyncToCustomerService(): mixed { return $this->get('syncToCustomerService'); }
    /** @param bool|null $value */
    public function setSyncToCustomerService(mixed $value): void { $this->set('syncToCustomerService', $value); }
    /** @param bool|null $value */
    public function syncToCustomerService(mixed $value): static { return $this->set('syncToCustomerService', $value); }
}
