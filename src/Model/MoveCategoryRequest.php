<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class MoveCategoryRequest extends AbstractModel
{
    protected const FIELDS = [
        'categoryId' => ['categoryId', 'String'],
        'beforeCategoryId' => ['beforeCategoryId', 'String'],
        'parentCategoryId' => ['parentCategoryId', 'String'],
    ];

    /** @return string|null */
    public function getCategoryId(): mixed { return $this->get('categoryId'); }
    /** @param string|null $value */
    public function setCategoryId(mixed $value): void { $this->set('categoryId', $value); }
    /** @param string|null $value */
    public function categoryId(mixed $value): static { return $this->set('categoryId', $value); }

    /** @return string|null */
    public function getBeforeCategoryId(): mixed { return $this->get('beforeCategoryId'); }
    /** @param string|null $value */
    public function setBeforeCategoryId(mixed $value): void { $this->set('beforeCategoryId', $value); }
    /** @param string|null $value */
    public function beforeCategoryId(mixed $value): static { return $this->set('beforeCategoryId', $value); }

    /** @return string|null */
    public function getParentCategoryId(): mixed { return $this->get('parentCategoryId'); }
    /** @param string|null $value */
    public function setParentCategoryId(mixed $value): void { $this->set('parentCategoryId', $value); }
    /** @param string|null $value */
    public function parentCategoryId(mixed $value): static { return $this->set('parentCategoryId', $value); }
}
