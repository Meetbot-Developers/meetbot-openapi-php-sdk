<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplatePreviewResultDataItemButtonsItem extends AbstractModel
{
    protected const FIELDS = [
        'autofillText' => ['autofill_text', 'String'],
        'text' => ['text', 'String'],
    ];

    /** @return string|null */
    public function getAutofillText(): mixed { return $this->get('autofillText'); }
    /** @param string|null $value */
    public function setAutofillText(mixed $value): void { $this->set('autofillText', $value); }
    /** @param string|null $value */
    public function autofillText(mixed $value): static { return $this->set('autofillText', $value); }

    /** @return string|null */
    public function getText(): mixed { return $this->get('text'); }
    /** @param string|null $value */
    public function setText(mixed $value): void { $this->set('text', $value); }
    /** @param string|null $value */
    public function text(mixed $value): static { return $this->set('text', $value); }
}
