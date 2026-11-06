<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateGroupListResultPaging extends AbstractModel
{
    protected const FIELDS = [
        'cursors' => ['cursors', 'WhatsappTemplateGroupListResultPagingCursors'],
    ];

    /** @return \Meetbot\OpenApi\Model\WhatsappTemplateGroupListResultPagingCursors|null */
    public function getCursors(): mixed { return $this->get('cursors'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappTemplateGroupListResultPagingCursors|null $value */
    public function setCursors(mixed $value): void { $this->set('cursors', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappTemplateGroupListResultPagingCursors|null $value */
    public function cursors(mixed $value): static { return $this->set('cursors', $value); }
}
