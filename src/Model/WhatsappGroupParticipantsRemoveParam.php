<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappGroupParticipantsRemoveParam extends AbstractModel
{
    protected const FIELDS = [
        'messagingProduct' => ['messaging_product', 'String'],
        'participants' => ['participants', 'List<WhatsappGroupParticipantsRemoveParamParticipantsItem>'],
    ];

    /** @return string|null */
    public function getMessagingProduct(): mixed { return $this->get('messagingProduct'); }
    /** @param string|null $value */
    public function setMessagingProduct(mixed $value): void { $this->set('messagingProduct', $value); }
    /** @param string|null $value */
    public function messagingProduct(mixed $value): static { return $this->set('messagingProduct', $value); }

    /** @return list<\Meetbot\OpenApi\Model\WhatsappGroupParticipantsRemoveParamParticipantsItem>|null */
    public function getParticipants(): mixed { return $this->get('participants'); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappGroupParticipantsRemoveParamParticipantsItem>|null $value */
    public function setParticipants(mixed $value): void { $this->set('participants', $value); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappGroupParticipantsRemoveParamParticipantsItem>|null $value */
    public function participants(mixed $value): static { return $this->set('participants', $value); }
}
