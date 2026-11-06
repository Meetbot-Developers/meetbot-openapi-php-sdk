<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class FlowUserReplyWebhookDataMsgEntryItemChangesItemValueMessagesItemInteractive extends AbstractModel
{
    protected const FIELDS = [
        'type' => ['type', 'String'],
        'nfmReply' => ['nfm_reply', 'FlowUserReplyWebhookDataMsgEntryItemChangesItemValueMessagesItemInteractiveNfmReply'],
    ];

    /** @return string|null */
    public function getType(): mixed { return $this->get('type'); }
    /** @param string|null $value */
    public function setType(mixed $value): void { $this->set('type', $value); }
    /** @param string|null $value */
    public function type(mixed $value): static { return $this->set('type', $value); }

    /** @return \Meetbot\OpenApi\Model\FlowUserReplyWebhookDataMsgEntryItemChangesItemValueMessagesItemInteractiveNfmReply|null */
    public function getNfmReply(): mixed { return $this->get('nfmReply'); }
    /** @param \Meetbot\OpenApi\Model\FlowUserReplyWebhookDataMsgEntryItemChangesItemValueMessagesItemInteractiveNfmReply|null $value */
    public function setNfmReply(mixed $value): void { $this->set('nfmReply', $value); }
    /** @param \Meetbot\OpenApi\Model\FlowUserReplyWebhookDataMsgEntryItemChangesItemValueMessagesItemInteractiveNfmReply|null $value */
    public function nfmReply(mixed $value): static { return $this->set('nfmReply', $value); }
}
