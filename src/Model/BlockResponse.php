<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class BlockResponse extends AbstractModel
{
    protected const FIELDS = [
        'blockId' => ['blockId', 'Long'],
        'blockName' => ['blockName', 'String'],
        'sceneType' => ['sceneType', 'String'],
        'messageType' => ['messageType', 'String'],
        'groupId' => ['groupId', 'Long'],
        'groupName' => ['groupName', 'String'],
        'wabaId' => ['wabaId', 'String'],
        'wabaName' => ['wabaName', 'String'],
        'createTime' => ['createTime', 'Long'],
        'updateTime' => ['updateTime', 'Long'],
    ];

    /** @return int|string|null */
    public function getBlockId(): mixed { return $this->get('blockId'); }
    /** @param int|string|null $value */
    public function setBlockId(mixed $value): void { $this->set('blockId', $value); }
    /** @param int|string|null $value */
    public function blockId(mixed $value): static { return $this->set('blockId', $value); }

    /** @return string|null */
    public function getBlockName(): mixed { return $this->get('blockName'); }
    /** @param string|null $value */
    public function setBlockName(mixed $value): void { $this->set('blockName', $value); }
    /** @param string|null $value */
    public function blockName(mixed $value): static { return $this->set('blockName', $value); }

    /** @return string|null */
    public function getSceneType(): mixed { return $this->get('sceneType'); }
    /** @param string|null $value */
    public function setSceneType(mixed $value): void { $this->set('sceneType', $value); }
    /** @param string|null $value */
    public function sceneType(mixed $value): static { return $this->set('sceneType', $value); }

    /** @return string|null */
    public function getMessageType(): mixed { return $this->get('messageType'); }
    /** @param string|null $value */
    public function setMessageType(mixed $value): void { $this->set('messageType', $value); }
    /** @param string|null $value */
    public function messageType(mixed $value): static { return $this->set('messageType', $value); }

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

    /** @return string|null */
    public function getWabaId(): mixed { return $this->get('wabaId'); }
    /** @param string|null $value */
    public function setWabaId(mixed $value): void { $this->set('wabaId', $value); }
    /** @param string|null $value */
    public function wabaId(mixed $value): static { return $this->set('wabaId', $value); }

    /** @return string|null */
    public function getWabaName(): mixed { return $this->get('wabaName'); }
    /** @param string|null $value */
    public function setWabaName(mixed $value): void { $this->set('wabaName', $value); }
    /** @param string|null $value */
    public function wabaName(mixed $value): static { return $this->set('wabaName', $value); }

    /** @return int|string|null */
    public function getCreateTime(): mixed { return $this->get('createTime'); }
    /** @param int|string|null $value */
    public function setCreateTime(mixed $value): void { $this->set('createTime', $value); }
    /** @param int|string|null $value */
    public function createTime(mixed $value): static { return $this->set('createTime', $value); }

    /** @return int|string|null */
    public function getUpdateTime(): mixed { return $this->get('updateTime'); }
    /** @param int|string|null $value */
    public function setUpdateTime(mixed $value): void { $this->set('updateTime', $value); }
    /** @param int|string|null $value */
    public function updateTime(mixed $value): static { return $this->set('updateTime', $value); }
}
