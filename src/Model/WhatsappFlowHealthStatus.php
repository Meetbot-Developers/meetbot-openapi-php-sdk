<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappFlowHealthStatus extends AbstractModel
{
    protected const FIELDS = [
        'canSendMessage' => ['can_send_message', 'String'],
        'entities' => ['entities', 'List<WhatsappFlowHealthEntity>'],
    ];

    /** @return string|null */
    public function getCanSendMessage(): mixed { return $this->get('canSendMessage'); }
    /** @param string|null $value */
    public function setCanSendMessage(mixed $value): void { $this->set('canSendMessage', $value); }
    /** @param string|null $value */
    public function canSendMessage(mixed $value): static { return $this->set('canSendMessage', $value); }

    /** @return list<\Meetbot\OpenApi\Model\WhatsappFlowHealthEntity>|null */
    public function getEntities(): mixed { return $this->get('entities'); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappFlowHealthEntity>|null $value */
    public function setEntities(mixed $value): void { $this->set('entities', $value); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappFlowHealthEntity>|null $value */
    public function entities(mixed $value): static { return $this->set('entities', $value); }
}
