<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappAnalyticsQueryResult extends AbstractModel
{
    protected const FIELDS = [
        'conversationAnalytics' => ['conversation_analytics', 'WhatsappAnalyticsQueryResultConversationAnalytics'],
        'id' => ['id', 'String'],
    ];

    /** @return \Meetbot\OpenApi\Model\WhatsappAnalyticsQueryResultConversationAnalytics|null */
    public function getConversationAnalytics(): mixed { return $this->get('conversationAnalytics'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappAnalyticsQueryResultConversationAnalytics|null $value */
    public function setConversationAnalytics(mixed $value): void { $this->set('conversationAnalytics', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappAnalyticsQueryResultConversationAnalytics|null $value */
    public function conversationAnalytics(mixed $value): static { return $this->set('conversationAnalytics', $value); }

    /** @return string|null */
    public function getId(): mixed { return $this->get('id'); }
    /** @param string|null $value */
    public function setId(mixed $value): void { $this->set('id', $value); }
    /** @param string|null $value */
    public function id(mixed $value): static { return $this->set('id', $value); }
}
