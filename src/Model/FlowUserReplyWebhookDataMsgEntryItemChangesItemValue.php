<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class FlowUserReplyWebhookDataMsgEntryItemChangesItemValue extends AbstractModel
{
    protected const FIELDS = [
        'metadata' => ['metadata', 'JsonNode'],
        'messagingProduct' => ['messaging_product', 'String'],
        'messages' => ['messages', 'List<FlowUserReplyWebhookDataMsgEntryItemChangesItemValueMessagesItem>'],
        'contacts' => ['contacts', 'List<FlowUserReplyWebhookDataMsgEntryItemChangesItemValueContactsItem>'],
    ];

    /** @return mixed|null */
    public function getMetadata(): mixed { return $this->get('metadata'); }
    /** @param mixed|null $value */
    public function setMetadata(mixed $value): void { $this->set('metadata', $value); }
    /** @param mixed|null $value */
    public function metadata(mixed $value): static { return $this->set('metadata', $value); }

    /** @return string|null */
    public function getMessagingProduct(): mixed { return $this->get('messagingProduct'); }
    /** @param string|null $value */
    public function setMessagingProduct(mixed $value): void { $this->set('messagingProduct', $value); }
    /** @param string|null $value */
    public function messagingProduct(mixed $value): static { return $this->set('messagingProduct', $value); }

    /** @return list<\Meetbot\OpenApi\Model\FlowUserReplyWebhookDataMsgEntryItemChangesItemValueMessagesItem>|null */
    public function getMessages(): mixed { return $this->get('messages'); }
    /** @param list<\Meetbot\OpenApi\Model\FlowUserReplyWebhookDataMsgEntryItemChangesItemValueMessagesItem>|null $value */
    public function setMessages(mixed $value): void { $this->set('messages', $value); }
    /** @param list<\Meetbot\OpenApi\Model\FlowUserReplyWebhookDataMsgEntryItemChangesItemValueMessagesItem>|null $value */
    public function messages(mixed $value): static { return $this->set('messages', $value); }

    /** @return list<\Meetbot\OpenApi\Model\FlowUserReplyWebhookDataMsgEntryItemChangesItemValueContactsItem>|null */
    public function getContacts(): mixed { return $this->get('contacts'); }
    /** @param list<\Meetbot\OpenApi\Model\FlowUserReplyWebhookDataMsgEntryItemChangesItemValueContactsItem>|null $value */
    public function setContacts(mixed $value): void { $this->set('contacts', $value); }
    /** @param list<\Meetbot\OpenApi\Model\FlowUserReplyWebhookDataMsgEntryItemChangesItemValueContactsItem>|null $value */
    public function contacts(mixed $value): static { return $this->set('contacts', $value); }
}
