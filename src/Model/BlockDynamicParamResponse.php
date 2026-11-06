<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class BlockDynamicParamResponse extends AbstractModel
{
    protected const FIELDS = [
        'blockId' => ['blockId', 'Long'],
        'blockName' => ['blockName', 'String'],
        'paramList' => ['paramList', 'List<BlockDynamicParamInfoResponse>'],
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

    /** @return list<\Meetbot\OpenApi\Model\BlockDynamicParamInfoResponse>|null */
    public function getParamList(): mixed { return $this->get('paramList'); }
    /** @param list<\Meetbot\OpenApi\Model\BlockDynamicParamInfoResponse>|null $value */
    public function setParamList(mixed $value): void { $this->set('paramList', $value); }
    /** @param list<\Meetbot\OpenApi\Model\BlockDynamicParamInfoResponse>|null $value */
    public function paramList(mixed $value): static { return $this->set('paramList', $value); }
}
