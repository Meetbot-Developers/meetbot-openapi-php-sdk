<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappWelcomeMessageDeleteRequest extends AbstractModel
{
    protected const FIELDS = [
        'wabaId' => ['wabaId', 'String'],
        'sequenceId' => ['sequenceId', 'String'],
    ];

    /** @return string|null */
    public function getWabaId(): mixed { return $this->get('wabaId'); }
    /** @param string|null $value */
    public function setWabaId(mixed $value): void { $this->set('wabaId', $value); }
    /** @param string|null $value */
    public function wabaId(mixed $value): static { return $this->set('wabaId', $value); }

    /** @return string|null */
    public function getSequenceId(): mixed { return $this->get('sequenceId'); }
    /** @param string|null $value */
    public function setSequenceId(mixed $value): void { $this->set('sequenceId', $value); }
    /** @param string|null $value */
    public function sequenceId(mixed $value): static { return $this->set('sequenceId', $value); }
}
