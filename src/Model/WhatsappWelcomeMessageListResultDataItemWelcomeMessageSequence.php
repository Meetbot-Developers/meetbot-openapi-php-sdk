<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappWelcomeMessageListResultDataItemWelcomeMessageSequence extends AbstractModel
{
    protected const FIELDS = [
        'text' => ['text', 'String'],
        'autofillMessage' => ['autofill_message', 'WhatsappWelcomeMessageListResultDataItemWelcomeMessageSequenceAutofillMessage'],
    ];

    /** @return string|null */
    public function getText(): mixed { return $this->get('text'); }
    /** @param string|null $value */
    public function setText(mixed $value): void { $this->set('text', $value); }
    /** @param string|null $value */
    public function text(mixed $value): static { return $this->set('text', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappWelcomeMessageListResultDataItemWelcomeMessageSequenceAutofillMessage|null */
    public function getAutofillMessage(): mixed { return $this->get('autofillMessage'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappWelcomeMessageListResultDataItemWelcomeMessageSequenceAutofillMessage|null $value */
    public function setAutofillMessage(mixed $value): void { $this->set('autofillMessage', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappWelcomeMessageListResultDataItemWelcomeMessageSequenceAutofillMessage|null $value */
    public function autofillMessage(mixed $value): static { return $this->set('autofillMessage', $value); }
}
