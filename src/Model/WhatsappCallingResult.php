<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappCallingResult extends AbstractModel
{
    protected const FIELDS = [
        'success' => ['success', 'Boolean'],
        'messagingProduct' => ['messaging_product', 'String'],
        'calls' => ['calls', 'List<WhatsappCallRef>'],
    ];

    /** @return bool|null */
    public function getSuccess(): mixed { return $this->get('success'); }
    /** @param bool|null $value */
    public function setSuccess(mixed $value): void { $this->set('success', $value); }
    /** @param bool|null $value */
    public function success(mixed $value): static { return $this->set('success', $value); }

    /** @return string|null */
    public function getMessagingProduct(): mixed { return $this->get('messagingProduct'); }
    /** @param string|null $value */
    public function setMessagingProduct(mixed $value): void { $this->set('messagingProduct', $value); }
    /** @param string|null $value */
    public function messagingProduct(mixed $value): static { return $this->set('messagingProduct', $value); }

    /** @return list<\Meetbot\OpenApi\Model\WhatsappCallRef>|null */
    public function getCalls(): mixed { return $this->get('calls'); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappCallRef>|null $value */
    public function setCalls(mixed $value): void { $this->set('calls', $value); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappCallRef>|null $value */
    public function calls(mixed $value): static { return $this->set('calls', $value); }
}
