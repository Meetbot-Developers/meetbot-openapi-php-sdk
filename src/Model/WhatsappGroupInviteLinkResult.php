<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappGroupInviteLinkResult extends AbstractModel
{
    protected const FIELDS = [
        'inviteLink' => ['invite_link', 'String'],
    ];

    /** @return string|null */
    public function getInviteLink(): mixed { return $this->get('inviteLink'); }
    /** @param string|null $value */
    public function setInviteLink(mixed $value): void { $this->set('inviteLink', $value); }
    /** @param string|null $value */
    public function inviteLink(mixed $value): static { return $this->set('inviteLink', $value); }
}
