<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class DeleteStaticTagRequest extends AbstractModel
{
    protected const FIELDS = [
        'tagId' => ['tagId', 'String'],
    ];

    /** @return string|null */
    public function getTagId(): mixed { return $this->get('tagId'); }
    /** @param string|null $value */
    public function setTagId(mixed $value): void { $this->set('tagId', $value); }
    /** @param string|null $value */
    public function tagId(mixed $value): static { return $this->set('tagId', $value); }
}
