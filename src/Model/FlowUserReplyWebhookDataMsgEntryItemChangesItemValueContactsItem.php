<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class FlowUserReplyWebhookDataMsgEntryItemChangesItemValueContactsItem extends AbstractModel
{
    protected const FIELDS = [
        'userId' => ['user_id', 'String'],
        'profile' => ['profile', 'FlowUserReplyWebhookDataMsgEntryItemChangesItemValueContactsItemProfile'],
        'waId' => ['wa_id', 'String'],
    ];

    /** @return string|null */
    public function getUserId(): mixed { return $this->get('userId'); }
    /** @param string|null $value */
    public function setUserId(mixed $value): void { $this->set('userId', $value); }
    /** @param string|null $value */
    public function userId(mixed $value): static { return $this->set('userId', $value); }

    /** @return \Meetbot\OpenApi\Model\FlowUserReplyWebhookDataMsgEntryItemChangesItemValueContactsItemProfile|null */
    public function getProfile(): mixed { return $this->get('profile'); }
    /** @param \Meetbot\OpenApi\Model\FlowUserReplyWebhookDataMsgEntryItemChangesItemValueContactsItemProfile|null $value */
    public function setProfile(mixed $value): void { $this->set('profile', $value); }
    /** @param \Meetbot\OpenApi\Model\FlowUserReplyWebhookDataMsgEntryItemChangesItemValueContactsItemProfile|null $value */
    public function profile(mixed $value): static { return $this->set('profile', $value); }

    /** @return string|null */
    public function getWaId(): mixed { return $this->get('waId'); }
    /** @param string|null $value */
    public function setWaId(mixed $value): void { $this->set('waId', $value); }
    /** @param string|null $value */
    public function waId(mixed $value): static { return $this->set('waId', $value); }
}
