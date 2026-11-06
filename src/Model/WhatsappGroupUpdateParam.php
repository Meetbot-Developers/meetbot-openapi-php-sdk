<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappGroupUpdateParam extends AbstractModel
{
    protected const FIELDS = [
        'messagingProduct' => ['messaging_product', 'String'],
        'subject' => ['subject', 'String'],
        'description' => ['description', 'String'],
    ];

    /** @return string|null */
    public function getMessagingProduct(): mixed { return $this->get('messagingProduct'); }
    /** @param string|null $value */
    public function setMessagingProduct(mixed $value): void { $this->set('messagingProduct', $value); }
    /** @param string|null $value */
    public function messagingProduct(mixed $value): static { return $this->set('messagingProduct', $value); }

    /** @return string|null */
    public function getSubject(): mixed { return $this->get('subject'); }
    /** @param string|null $value */
    public function setSubject(mixed $value): void { $this->set('subject', $value); }
    /** @param string|null $value */
    public function subject(mixed $value): static { return $this->set('subject', $value); }

    /** @return string|null */
    public function getDescription(): mixed { return $this->get('description'); }
    /** @param string|null $value */
    public function setDescription(mixed $value): void { $this->set('description', $value); }
    /** @param string|null $value */
    public function description(mixed $value): static { return $this->set('description', $value); }
}
