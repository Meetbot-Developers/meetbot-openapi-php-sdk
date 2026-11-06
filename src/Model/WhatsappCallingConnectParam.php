<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappCallingConnectParam extends AbstractModel
{
    protected const FIELDS = [
        'messagingProduct' => ['messaging_product', 'String'],
        'to' => ['to', 'String'],
        'recipient' => ['recipient', 'String'],
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
    public function getTo(): mixed { return $this->get('to'); }
    /** @param string|null $value */
    public function setTo(mixed $value): void { $this->set('to', $value); }
    /** @param string|null $value */
    public function to(mixed $value): static { return $this->set('to', $value); }

    /** @return string|null */
    public function getRecipient(): mixed { return $this->get('recipient'); }
    /** @param string|null $value */
    public function setRecipient(mixed $value): void { $this->set('recipient', $value); }
    /** @param string|null $value */
    public function recipient(mixed $value): static { return $this->set('recipient', $value); }

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
