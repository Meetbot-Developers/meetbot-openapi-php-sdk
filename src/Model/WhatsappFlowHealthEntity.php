<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappFlowHealthEntity extends AbstractModel
{
    protected const FIELDS = [
        'entityType' => ['entity_type', 'String'],
        'id' => ['id', 'String'],
        'canSendMessage' => ['can_send_message', 'String'],
        'errors' => ['errors', 'List<MetaValidationError>'],
    ];

    /** @return string|null */
    public function getEntityType(): mixed { return $this->get('entityType'); }
    /** @param string|null $value */
    public function setEntityType(mixed $value): void { $this->set('entityType', $value); }
    /** @param string|null $value */
    public function entityType(mixed $value): static { return $this->set('entityType', $value); }

    /** @return string|null */
    public function getId(): mixed { return $this->get('id'); }
    /** @param string|null $value */
    public function setId(mixed $value): void { $this->set('id', $value); }
    /** @param string|null $value */
    public function id(mixed $value): static { return $this->set('id', $value); }

    /** @return string|null */
    public function getCanSendMessage(): mixed { return $this->get('canSendMessage'); }
    /** @param string|null $value */
    public function setCanSendMessage(mixed $value): void { $this->set('canSendMessage', $value); }
    /** @param string|null $value */
    public function canSendMessage(mixed $value): static { return $this->set('canSendMessage', $value); }

    /** @return list<\Meetbot\OpenApi\Model\MetaValidationError>|null */
    public function getErrors(): mixed { return $this->get('errors'); }
    /** @param list<\Meetbot\OpenApi\Model\MetaValidationError>|null $value */
    public function setErrors(mixed $value): void { $this->set('errors', $value); }
    /** @param list<\Meetbot\OpenApi\Model\MetaValidationError>|null $value */
    public function errors(mixed $value): static { return $this->set('errors', $value); }
}
