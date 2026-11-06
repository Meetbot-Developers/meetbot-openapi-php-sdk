<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappInteractiveFooter extends AbstractModel
{
    protected const FIELDS = [
        'text' => ['text', 'String'],
    ];

    /** @return string|null */
    public function getText(): mixed { return $this->get('text'); }
    /** @param string|null $value */
    public function setText(mixed $value): void { $this->set('text', $value); }
    /** @param string|null $value */
    public function text(mixed $value): static { return $this->set('text', $value); }
}
