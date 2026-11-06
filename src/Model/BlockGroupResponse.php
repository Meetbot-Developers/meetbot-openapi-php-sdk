<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class BlockGroupResponse extends AbstractModel
{
    protected const FIELDS = [
        'groupId' => ['groupId', 'Long'],
        'groupName' => ['groupName', 'String'],
    ];

    /** @return int|string|null */
    public function getGroupId(): mixed { return $this->get('groupId'); }
    /** @param int|string|null $value */
    public function setGroupId(mixed $value): void { $this->set('groupId', $value); }
    /** @param int|string|null $value */
    public function groupId(mixed $value): static { return $this->set('groupId', $value); }

    /** @return string|null */
    public function getGroupName(): mixed { return $this->get('groupName'); }
    /** @param string|null $value */
    public function setGroupName(mixed $value): void { $this->set('groupName', $value); }
    /** @param string|null $value */
    public function groupName(mixed $value): static { return $this->set('groupName', $value); }
}
