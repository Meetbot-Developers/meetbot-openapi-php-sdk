<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class CommerceOrderExtendFieldDefResponse extends AbstractModel
{
    protected const FIELDS = [
        'fieldKey' => ['fieldKey', 'String'],
        'fieldName' => ['fieldName', 'String'],
        'required' => ['required', 'Boolean'],
        'sort' => ['sort', 'Long'],
        'value' => ['value', 'String'],
    ];

    /** @return string|null */
    public function getFieldKey(): mixed { return $this->get('fieldKey'); }
    /** @param string|null $value */
    public function setFieldKey(mixed $value): void { $this->set('fieldKey', $value); }
    /** @param string|null $value */
    public function fieldKey(mixed $value): static { return $this->set('fieldKey', $value); }

    /** @return string|null */
    public function getFieldName(): mixed { return $this->get('fieldName'); }
    /** @param string|null $value */
    public function setFieldName(mixed $value): void { $this->set('fieldName', $value); }
    /** @param string|null $value */
    public function fieldName(mixed $value): static { return $this->set('fieldName', $value); }

    /** @return bool|null */
    public function getRequired(): mixed { return $this->get('required'); }
    /** @param bool|null $value */
    public function setRequired(mixed $value): void { $this->set('required', $value); }
    /** @param bool|null $value */
    public function required(mixed $value): static { return $this->set('required', $value); }

    /** @return int|string|null */
    public function getSort(): mixed { return $this->get('sort'); }
    /** @param int|string|null $value */
    public function setSort(mixed $value): void { $this->set('sort', $value); }
    /** @param int|string|null $value */
    public function sort(mixed $value): static { return $this->set('sort', $value); }

    /** @return string|null */
    public function getValue(): mixed { return $this->get('value'); }
    /** @param string|null $value */
    public function setValue(mixed $value): void { $this->set('value', $value); }
    /** @param string|null $value */
    public function value(mixed $value): static { return $this->set('value', $value); }
}
