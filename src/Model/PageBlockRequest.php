<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class PageBlockRequest extends AbstractModel
{
    protected const FIELDS = [
        'blockId' => ['blockId', 'Long'],
        'blockName' => ['blockName', 'String'],
        'sceneTypeList' => ['sceneTypeList', 'List<SceneType>'],
        'messageType' => ['messageType', 'String'],
        'wabaIdList' => ['wabaIdList', 'List<String>'],
        'groupIdList' => ['groupIdList', 'List<String>'],
        'templateName' => ['templateName', 'String'],
        'createTimeStart' => ['createTimeStart', 'Long'],
        'createTimeEnd' => ['createTimeEnd', 'Long'],
        'updateTimeStart' => ['updateTimeStart', 'Long'],
        'updateTimeEnd' => ['updateTimeEnd', 'Long'],
        'pageNo' => ['pageNo', 'Long'],
        'pageSize' => ['pageSize', 'Long'],
        'includeTotal' => ['includeTotal', 'Boolean'],
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

    /** @return list<\Meetbot\OpenApi\Model\Enums\SceneType>|null */
    public function getSceneTypeList(): mixed { return $this->get('sceneTypeList'); }
    /** @param list<\Meetbot\OpenApi\Model\Enums\SceneType>|null $value */
    public function setSceneTypeList(mixed $value): void { $this->set('sceneTypeList', $value); }
    /** @param list<\Meetbot\OpenApi\Model\Enums\SceneType>|null $value */
    public function sceneTypeList(mixed $value): static { return $this->set('sceneTypeList', $value); }

    /** @return string|null */
    public function getMessageType(): mixed { return $this->get('messageType'); }
    /** @param string|null $value */
    public function setMessageType(mixed $value): void { $this->set('messageType', $value); }
    /** @param string|null $value */
    public function messageType(mixed $value): static { return $this->set('messageType', $value); }

    /** @return list<string>|null */
    public function getWabaIdList(): mixed { return $this->get('wabaIdList'); }
    /** @param list<string>|null $value */
    public function setWabaIdList(mixed $value): void { $this->set('wabaIdList', $value); }
    /** @param list<string>|null $value */
    public function wabaIdList(mixed $value): static { return $this->set('wabaIdList', $value); }

    /** @return list<string>|null */
    public function getGroupIdList(): mixed { return $this->get('groupIdList'); }
    /** @param list<string>|null $value */
    public function setGroupIdList(mixed $value): void { $this->set('groupIdList', $value); }
    /** @param list<string>|null $value */
    public function groupIdList(mixed $value): static { return $this->set('groupIdList', $value); }

    /** @return string|null */
    public function getTemplateName(): mixed { return $this->get('templateName'); }
    /** @param string|null $value */
    public function setTemplateName(mixed $value): void { $this->set('templateName', $value); }
    /** @param string|null $value */
    public function templateName(mixed $value): static { return $this->set('templateName', $value); }

    /** @return int|string|null */
    public function getCreateTimeStart(): mixed { return $this->get('createTimeStart'); }
    /** @param int|string|null $value */
    public function setCreateTimeStart(mixed $value): void { $this->set('createTimeStart', $value); }
    /** @param int|string|null $value */
    public function createTimeStart(mixed $value): static { return $this->set('createTimeStart', $value); }

    /** @return int|string|null */
    public function getCreateTimeEnd(): mixed { return $this->get('createTimeEnd'); }
    /** @param int|string|null $value */
    public function setCreateTimeEnd(mixed $value): void { $this->set('createTimeEnd', $value); }
    /** @param int|string|null $value */
    public function createTimeEnd(mixed $value): static { return $this->set('createTimeEnd', $value); }

    /** @return int|string|null */
    public function getUpdateTimeStart(): mixed { return $this->get('updateTimeStart'); }
    /** @param int|string|null $value */
    public function setUpdateTimeStart(mixed $value): void { $this->set('updateTimeStart', $value); }
    /** @param int|string|null $value */
    public function updateTimeStart(mixed $value): static { return $this->set('updateTimeStart', $value); }

    /** @return int|string|null */
    public function getUpdateTimeEnd(): mixed { return $this->get('updateTimeEnd'); }
    /** @param int|string|null $value */
    public function setUpdateTimeEnd(mixed $value): void { $this->set('updateTimeEnd', $value); }
    /** @param int|string|null $value */
    public function updateTimeEnd(mixed $value): static { return $this->set('updateTimeEnd', $value); }

    /** @return int|string|null */
    public function getPageNo(): mixed { return $this->get('pageNo'); }
    /** @param int|string|null $value */
    public function setPageNo(mixed $value): void { $this->set('pageNo', $value); }
    /** @param int|string|null $value */
    public function pageNo(mixed $value): static { return $this->set('pageNo', $value); }

    /** @return int|string|null */
    public function getPageSize(): mixed { return $this->get('pageSize'); }
    /** @param int|string|null $value */
    public function setPageSize(mixed $value): void { $this->set('pageSize', $value); }
    /** @param int|string|null $value */
    public function pageSize(mixed $value): static { return $this->set('pageSize', $value); }

    /** @return bool|null */
    public function getIncludeTotal(): mixed { return $this->get('includeTotal'); }
    /** @param bool|null $value */
    public function setIncludeTotal(mixed $value): void { $this->set('includeTotal', $value); }
    /** @param bool|null $value */
    public function includeTotal(mixed $value): static { return $this->set('includeTotal', $value); }
}
