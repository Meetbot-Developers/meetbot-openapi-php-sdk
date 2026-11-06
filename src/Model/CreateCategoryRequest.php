<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class CreateCategoryRequest extends AbstractModel
{
    protected const FIELDS = [
        'name' => ['name', 'String'],
        'parentCategoryId' => ['parentCategoryId', 'String'],
    ];

    /** @return string|null */
    public function getName(): mixed { return $this->get('name'); }
    /** @param string|null $value */
    public function setName(mixed $value): void { $this->set('name', $value); }
    /** @param string|null $value */
    public function name(mixed $value): static { return $this->set('name', $value); }

    /** @return string|null */
    public function getParentCategoryId(): mixed { return $this->get('parentCategoryId'); }
    /** @param string|null $value */
    public function setParentCategoryId(mixed $value): void { $this->set('parentCategoryId', $value); }
    /** @param string|null $value */
    public function parentCategoryId(mixed $value): static { return $this->set('parentCategoryId', $value); }
}
