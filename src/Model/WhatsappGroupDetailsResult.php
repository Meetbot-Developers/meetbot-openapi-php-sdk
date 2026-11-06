<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappGroupDetailsResult extends AbstractModel
{
    protected const FIELDS = [
        'id' => ['id', 'String'],
        'subject' => ['subject', 'String'],
        'participants' => ['participants', 'WhatsappGroupDetailsResultParticipants'],
    ];

    /** @return string|null */
    public function getId(): mixed { return $this->get('id'); }
    /** @param string|null $value */
    public function setId(mixed $value): void { $this->set('id', $value); }
    /** @param string|null $value */
    public function id(mixed $value): static { return $this->set('id', $value); }

    /** @return string|null */
    public function getSubject(): mixed { return $this->get('subject'); }
    /** @param string|null $value */
    public function setSubject(mixed $value): void { $this->set('subject', $value); }
    /** @param string|null $value */
    public function subject(mixed $value): static { return $this->set('subject', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappGroupDetailsResultParticipants|null */
    public function getParticipants(): mixed { return $this->get('participants'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappGroupDetailsResultParticipants|null $value */
    public function setParticipants(mixed $value): void { $this->set('participants', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappGroupDetailsResultParticipants|null $value */
    public function participants(mixed $value): static { return $this->set('participants', $value); }
}
