<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappAnalyticsQueryResultConversationAnalyticsDataItem extends AbstractModel
{
    protected const FIELDS = [
        'start' => ['start', 'Long'],
        'end' => ['end', 'Long'],
        'conversation' => ['conversation', 'Long'],
    ];

    /** @return int|string|null */
    public function getStart(): mixed { return $this->get('start'); }
    /** @param int|string|null $value */
    public function setStart(mixed $value): void { $this->set('start', $value); }
    /** @param int|string|null $value */
    public function start(mixed $value): static { return $this->set('start', $value); }

    /** @return int|string|null */
    public function getEnd(): mixed { return $this->get('end'); }
    /** @param int|string|null $value */
    public function setEnd(mixed $value): void { $this->set('end', $value); }
    /** @param int|string|null $value */
    public function end(mixed $value): static { return $this->set('end', $value); }

    /** @return int|string|null */
    public function getConversation(): mixed { return $this->get('conversation'); }
    /** @param int|string|null $value */
    public function setConversation(mixed $value): void { $this->set('conversation', $value); }
    /** @param int|string|null $value */
    public function conversation(mixed $value): static { return $this->set('conversation', $value); }
}
