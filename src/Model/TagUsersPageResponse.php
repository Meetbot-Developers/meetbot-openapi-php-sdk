<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class TagUsersPageResponse extends AbstractModel
{
    protected const FIELDS = [
        'list' => ['list', 'List<TagUserItemResponse>'],
        'lastId' => ['lastId', 'String'],
        'hasMore' => ['hasMore', 'Boolean'],
    ];

    /** @return list<\Meetbot\OpenApi\Model\TagUserItemResponse>|null */
    public function getList(): mixed { return $this->get('list'); }
    /** @param list<\Meetbot\OpenApi\Model\TagUserItemResponse>|null $value */
    public function setList(mixed $value): void { $this->set('list', $value); }
    /** @param list<\Meetbot\OpenApi\Model\TagUserItemResponse>|null $value */
    public function list(mixed $value): static { return $this->set('list', $value); }

    /** @return string|null */
    public function getLastId(): mixed { return $this->get('lastId'); }
    /** @param string|null $value */
    public function setLastId(mixed $value): void { $this->set('lastId', $value); }
    /** @param string|null $value */
    public function lastId(mixed $value): static { return $this->set('lastId', $value); }

    /** @return bool|null */
    public function getHasMore(): mixed { return $this->get('hasMore'); }
    /** @param bool|null $value */
    public function setHasMore(mixed $value): void { $this->set('hasMore', $value); }
    /** @param bool|null $value */
    public function hasMore(mixed $value): static { return $this->set('hasMore', $value); }
}
