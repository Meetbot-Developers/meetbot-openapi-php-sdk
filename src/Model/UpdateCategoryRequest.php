<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class UpdateCategoryRequest extends AbstractModel
{
    protected const FIELDS = [
        'categoryId' => ['categoryId', 'String'],
        'name' => ['name', 'String'],
    ];

    /** @return string|null */
    public function getCategoryId(): mixed { return $this->get('categoryId'); }
    /** @param string|null $value */
    public function setCategoryId(mixed $value): void { $this->set('categoryId', $value); }
    /** @param string|null $value */
    public function categoryId(mixed $value): static { return $this->set('categoryId', $value); }

    /** @return string|null */
    public function getName(): mixed { return $this->get('name'); }
    /** @param string|null $value */
    public function setName(mixed $value): void { $this->set('name', $value); }
    /** @param string|null $value */
    public function name(mixed $value): static { return $this->set('name', $value); }
}
