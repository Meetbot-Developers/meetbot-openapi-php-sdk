<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class MoveStaticTagRequest extends AbstractModel
{
    protected const FIELDS = [
        'tagId' => ['tagId', 'String'],
        'beforeTagId' => ['beforeTagId', 'String'],
        'categoryId' => ['categoryId', 'String'],
    ];

    /** @return string|null */
    public function getTagId(): mixed { return $this->get('tagId'); }
    /** @param string|null $value */
    public function setTagId(mixed $value): void { $this->set('tagId', $value); }
    /** @param string|null $value */
    public function tagId(mixed $value): static { return $this->set('tagId', $value); }

    /** @return string|null */
    public function getBeforeTagId(): mixed { return $this->get('beforeTagId'); }
    /** @param string|null $value */
    public function setBeforeTagId(mixed $value): void { $this->set('beforeTagId', $value); }
    /** @param string|null $value */
    public function beforeTagId(mixed $value): static { return $this->set('beforeTagId', $value); }

    /** @return string|null */
    public function getCategoryId(): mixed { return $this->get('categoryId'); }
    /** @param string|null $value */
    public function setCategoryId(mixed $value): void { $this->set('categoryId', $value); }
    /** @param string|null $value */
    public function categoryId(mixed $value): static { return $this->set('categoryId', $value); }
}
