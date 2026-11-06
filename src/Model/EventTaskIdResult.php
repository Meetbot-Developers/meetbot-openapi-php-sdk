<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class EventTaskIdResult extends AbstractModel
{
    protected const FIELDS = [
        'eventTaskId' => ['eventTaskId', 'Long'],
    ];

    /** @return int|string|null */
    public function getEventTaskId(): mixed { return $this->get('eventTaskId'); }
    /** @param int|string|null $value */
    public function setEventTaskId(mixed $value): void { $this->set('eventTaskId', $value); }
    /** @param int|string|null $value */
    public function eventTaskId(mixed $value): static { return $this->set('eventTaskId', $value); }
}
