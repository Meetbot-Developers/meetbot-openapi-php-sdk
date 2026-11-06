<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappGroupParticipantsRemoveRequest extends AbstractModel
{
    protected const FIELDS = [
        'groupId' => ['groupId', 'String'],
        'param' => ['param', 'WhatsappGroupParticipantsRemoveParam'],
    ];

    /** @return string|null */
    public function getGroupId(): mixed { return $this->get('groupId'); }
    /** @param string|null $value */
    public function setGroupId(mixed $value): void { $this->set('groupId', $value); }
    /** @param string|null $value */
    public function groupId(mixed $value): static { return $this->set('groupId', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappGroupParticipantsRemoveParam|null */
    public function getParam(): mixed { return $this->get('param'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappGroupParticipantsRemoveParam|null $value */
    public function setParam(mixed $value): void { $this->set('param', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappGroupParticipantsRemoveParam|null $value */
    public function param(mixed $value): static { return $this->set('param', $value); }
}
