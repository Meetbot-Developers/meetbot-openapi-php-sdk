<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class BlockPreviewRequest extends AbstractModel
{
    protected const FIELDS = [
        'blockId' => ['blockId', 'Long'],
    ];

    /** @return int|string|null */
    public function getBlockId(): mixed { return $this->get('blockId'); }
    /** @param int|string|null $value */
    public function setBlockId(mixed $value): void { $this->set('blockId', $value); }
    /** @param int|string|null $value */
    public function blockId(mixed $value): static { return $this->set('blockId', $value); }
}
