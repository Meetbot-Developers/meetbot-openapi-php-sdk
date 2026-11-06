<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappWelcomeMessageListResultDataItemWelcomeMessageSequenceAutofillMessage extends AbstractModel
{
    protected const FIELDS = [
        'content' => ['content', 'String'],
    ];

    /** @return string|null */
    public function getContent(): mixed { return $this->get('content'); }
    /** @param string|null $value */
    public function setContent(mixed $value): void { $this->set('content', $value); }
    /** @param string|null $value */
    public function content(mixed $value): static { return $this->set('content', $value); }
}
