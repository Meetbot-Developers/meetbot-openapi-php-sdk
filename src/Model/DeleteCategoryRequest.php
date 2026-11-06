<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class DeleteCategoryRequest extends AbstractModel
{
    protected const FIELDS = [
        'categoryId' => ['categoryId', 'String'],
    ];

    /** @return string|null */
    public function getCategoryId(): mixed { return $this->get('categoryId'); }
    /** @param string|null $value */
    public function setCategoryId(mixed $value): void { $this->set('categoryId', $value); }
    /** @param string|null $value */
    public function categoryId(mixed $value): static { return $this->set('categoryId', $value); }
}
