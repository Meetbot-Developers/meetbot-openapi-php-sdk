<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateGroupListResultPagingCursors extends AbstractModel
{
    protected const FIELDS = [
        'after' => ['after', 'String'],
    ];

    /** @return string|null */
    public function getAfter(): mixed { return $this->get('after'); }
    /** @param string|null $value */
    public function setAfter(mixed $value): void { $this->set('after', $value); }
    /** @param string|null $value */
    public function after(mixed $value): static { return $this->set('after', $value); }
}
