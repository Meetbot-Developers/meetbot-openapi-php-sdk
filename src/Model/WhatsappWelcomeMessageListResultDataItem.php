<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappWelcomeMessageListResultDataItem extends AbstractModel
{
    protected const FIELDS = [
        'id' => ['id', 'String'],
        'name' => ['name', 'String'],
        'welcomeMessageSequence' => ['welcome_message_sequence', 'WhatsappWelcomeMessageListResultDataItemWelcomeMessageSequence'],
    ];

    /** @return string|null */
    public function getId(): mixed { return $this->get('id'); }
    /** @param string|null $value */
    public function setId(mixed $value): void { $this->set('id', $value); }
    /** @param string|null $value */
    public function id(mixed $value): static { return $this->set('id', $value); }

    /** @return string|null */
    public function getName(): mixed { return $this->get('name'); }
    /** @param string|null $value */
    public function setName(mixed $value): void { $this->set('name', $value); }
    /** @param string|null $value */
    public function name(mixed $value): static { return $this->set('name', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappWelcomeMessageListResultDataItemWelcomeMessageSequence|null */
    public function getWelcomeMessageSequence(): mixed { return $this->get('welcomeMessageSequence'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappWelcomeMessageListResultDataItemWelcomeMessageSequence|null $value */
    public function setWelcomeMessageSequence(mixed $value): void { $this->set('welcomeMessageSequence', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappWelcomeMessageListResultDataItemWelcomeMessageSequence|null $value */
    public function welcomeMessageSequence(mixed $value): static { return $this->set('welcomeMessageSequence', $value); }
}
