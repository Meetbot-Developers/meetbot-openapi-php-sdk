<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class CtwaConversionResult extends AbstractModel
{
    protected const FIELDS = [
        'eventsReceived' => ['events_received', 'Integer'],
        'messages' => ['messages', 'List<Map<String,Object>>'],
        'fbtraceId' => ['fbtrace_id', 'String'],
    ];

    /** @return int|null */
    public function getEventsReceived(): mixed { return $this->get('eventsReceived'); }
    /** @param int|null $value */
    public function setEventsReceived(mixed $value): void { $this->set('eventsReceived', $value); }
    /** @param int|null $value */
    public function eventsReceived(mixed $value): static { return $this->set('eventsReceived', $value); }

    /** @return list<array<string, mixed>|\stdClass>|null */
    public function getMessages(): mixed { return $this->get('messages'); }
    /** @param list<array<string, mixed>|\stdClass>|null $value */
    public function setMessages(mixed $value): void { $this->set('messages', $value); }
    /** @param list<array<string, mixed>|\stdClass>|null $value */
    public function messages(mixed $value): static { return $this->set('messages', $value); }

    /** @return string|null */
    public function getFbtraceId(): mixed { return $this->get('fbtraceId'); }
    /** @param string|null $value */
    public function setFbtraceId(mixed $value): void { $this->set('fbtraceId', $value); }
    /** @param string|null $value */
    public function fbtraceId(mixed $value): static { return $this->set('fbtraceId', $value); }
}
