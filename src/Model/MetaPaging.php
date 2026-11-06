<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class MetaPaging extends AbstractModel
{
    protected const FIELDS = [
        'cursors' => ['cursors', 'MetaCursors'],
    ];

    /** @return \Meetbot\OpenApi\Model\MetaCursors|null */
    public function getCursors(): mixed { return $this->get('cursors'); }
    /** @param \Meetbot\OpenApi\Model\MetaCursors|null $value */
    public function setCursors(mixed $value): void { $this->set('cursors', $value); }
    /** @param \Meetbot\OpenApi\Model\MetaCursors|null $value */
    public function cursors(mixed $value): static { return $this->set('cursors', $value); }
}
