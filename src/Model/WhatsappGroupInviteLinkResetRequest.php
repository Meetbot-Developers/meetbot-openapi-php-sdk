<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappGroupInviteLinkResetRequest extends AbstractModel
{
    protected const FIELDS = [
        'groupId' => ['groupId', 'String'],
        'param' => ['param', 'WhatsappGroupInviteLinkResetParam'],
    ];

    /** @return string|null */
    public function getGroupId(): mixed { return $this->get('groupId'); }
    /** @param string|null $value */
    public function setGroupId(mixed $value): void { $this->set('groupId', $value); }
    /** @param string|null $value */
    public function groupId(mixed $value): static { return $this->set('groupId', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappGroupInviteLinkResetParam|null */
    public function getParam(): mixed { return $this->get('param'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappGroupInviteLinkResetParam|null $value */
    public function setParam(mixed $value): void { $this->set('param', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappGroupInviteLinkResetParam|null $value */
    public function param(mixed $value): static { return $this->set('param', $value); }
}
