<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class BizSyncProductSeriesData extends AbstractModel
{
    protected const FIELDS = [
        'id' => ['id', 'String'],
        'updateTime' => ['updateTime', 'Long'],
        'collectionHandle' => ['collectionHandle', 'String'],
        'collectionTitle' => ['collectionTitle', 'String'],
        'collectionType' => ['collectionType', 'String'],
        'createTime' => ['createTime', 'Long'],
    ];

    /** @return string|null */
    public function getId(): mixed { return $this->get('id'); }
    /** @param string|null $value */
    public function setId(mixed $value): void { $this->set('id', $value); }
    /** @param string|null $value */
    public function id(mixed $value): static { return $this->set('id', $value); }

    /** @return int|string|null */
    public function getUpdateTime(): mixed { return $this->get('updateTime'); }
    /** @param int|string|null $value */
    public function setUpdateTime(mixed $value): void { $this->set('updateTime', $value); }
    /** @param int|string|null $value */
    public function updateTime(mixed $value): static { return $this->set('updateTime', $value); }

    /** @return string|null */
    public function getCollectionHandle(): mixed { return $this->get('collectionHandle'); }
    /** @param string|null $value */
    public function setCollectionHandle(mixed $value): void { $this->set('collectionHandle', $value); }
    /** @param string|null $value */
    public function collectionHandle(mixed $value): static { return $this->set('collectionHandle', $value); }

    /** @return string|null */
    public function getCollectionTitle(): mixed { return $this->get('collectionTitle'); }
    /** @param string|null $value */
    public function setCollectionTitle(mixed $value): void { $this->set('collectionTitle', $value); }
    /** @param string|null $value */
    public function collectionTitle(mixed $value): static { return $this->set('collectionTitle', $value); }

    /** @return string|null */
    public function getCollectionType(): mixed { return $this->get('collectionType'); }
    /** @param string|null $value */
    public function setCollectionType(mixed $value): void { $this->set('collectionType', $value); }
    /** @param string|null $value */
    public function collectionType(mixed $value): static { return $this->set('collectionType', $value); }

    /** @return int|string|null */
    public function getCreateTime(): mixed { return $this->get('createTime'); }
    /** @param int|string|null $value */
    public function setCreateTime(mixed $value): void { $this->set('createTime', $value); }
    /** @param int|string|null $value */
    public function createTime(mixed $value): static { return $this->set('createTime', $value); }
}
