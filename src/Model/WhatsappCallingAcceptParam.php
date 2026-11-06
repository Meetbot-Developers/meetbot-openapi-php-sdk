<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappCallingAcceptParam extends AbstractModel
{
    protected const FIELDS = [
        'messagingProduct' => ['messaging_product', 'String'],
        'callId' => ['call_id', 'String'],
        'action' => ['action', 'String'],
        'session' => ['session', 'WhatsappCallingSession'],
    ];

    /** @return string|null */
    public function getMessagingProduct(): mixed { return $this->get('messagingProduct'); }
    /** @param string|null $value */
    public function setMessagingProduct(mixed $value): void { $this->set('messagingProduct', $value); }
    /** @param string|null $value */
    public function messagingProduct(mixed $value): static { return $this->set('messagingProduct', $value); }

    /** @return string|null */
    public function getCallId(): mixed { return $this->get('callId'); }
    /** @param string|null $value */
    public function setCallId(mixed $value): void { $this->set('callId', $value); }
    /** @param string|null $value */
    public function callId(mixed $value): static { return $this->set('callId', $value); }

    /** @return string|null */
    public function getAction(): mixed { return $this->get('action'); }
    /** @param string|null $value */
    public function setAction(mixed $value): void { $this->set('action', $value); }
    /** @param string|null $value */
    public function action(mixed $value): static { return $this->set('action', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappCallingSession|null */
    public function getSession(): mixed { return $this->get('session'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappCallingSession|null $value */
    public function setSession(mixed $value): void { $this->set('session', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappCallingSession|null $value */
    public function session(mixed $value): static { return $this->set('session', $value); }
}
