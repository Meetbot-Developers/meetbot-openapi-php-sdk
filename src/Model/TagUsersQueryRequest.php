<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class TagUsersQueryRequest extends AbstractModel
{
    protected const FIELDS = [
        'tagValueId' => ['tagValueId', 'String'],
        'lastId' => ['lastId', 'String'],
        'pageSize' => ['pageSize', 'Long'],
    ];

    /** @return string|null */
    public function getTagValueId(): mixed { return $this->get('tagValueId'); }
    /** @param string|null $value */
    public function setTagValueId(mixed $value): void { $this->set('tagValueId', $value); }
    /** @param string|null $value */
    public function tagValueId(mixed $value): static { return $this->set('tagValueId', $value); }

    /** @return string|null */
    public function getLastId(): mixed { return $this->get('lastId'); }
    /** @param string|null $value */
    public function setLastId(mixed $value): void { $this->set('lastId', $value); }
    /** @param string|null $value */
    public function lastId(mixed $value): static { return $this->set('lastId', $value); }

    /** @return int|string|null */
    public function getPageSize(): mixed { return $this->get('pageSize'); }
    /** @param int|string|null $value */
    public function setPageSize(mixed $value): void { $this->set('pageSize', $value); }
    /** @param int|string|null $value */
    public function pageSize(mixed $value): static { return $this->set('pageSize', $value); }
}
