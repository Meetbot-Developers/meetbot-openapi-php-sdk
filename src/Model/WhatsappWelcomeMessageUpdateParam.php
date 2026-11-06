<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappWelcomeMessageUpdateParam extends AbstractModel
{
    protected const FIELDS = [
        'sequenceId' => ['sequenceId', 'String'],
        'name' => ['name', 'String'],
        'welcomeMessageSequence' => ['welcomeMessageSequence', 'JsonNode'],
    ];

    /** @return string|null */
    public function getSequenceId(): mixed { return $this->get('sequenceId'); }
    /** @param string|null $value */
    public function setSequenceId(mixed $value): void { $this->set('sequenceId', $value); }
    /** @param string|null $value */
    public function sequenceId(mixed $value): static { return $this->set('sequenceId', $value); }

    /** @return string|null */
    public function getName(): mixed { return $this->get('name'); }
    /** @param string|null $value */
    public function setName(mixed $value): void { $this->set('name', $value); }
    /** @param string|null $value */
    public function name(mixed $value): static { return $this->set('name', $value); }

    /** @return mixed|null */
    public function getWelcomeMessageSequence(): mixed { return $this->get('welcomeMessageSequence'); }
    /** @param mixed|null $value */
    public function setWelcomeMessageSequence(mixed $value): void { $this->set('welcomeMessageSequence', $value); }
    /** @param mixed|null $value */
    public function welcomeMessageSequence(mixed $value): static { return $this->set('welcomeMessageSequence', $value); }
}
