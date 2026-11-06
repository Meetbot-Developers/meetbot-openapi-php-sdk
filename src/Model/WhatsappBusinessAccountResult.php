<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappBusinessAccountResult extends AbstractModel
{
    protected const FIELDS = [
        'messageTemplateNamespace' => ['message_template_namespace', 'String'],
        'name' => ['name', 'String'],
        'timezoneId' => ['timezone_id', 'String'],
        'currency' => ['currency', 'String'],
        'id' => ['id', 'String'],
    ];

    /** @return string|null */
    public function getMessageTemplateNamespace(): mixed { return $this->get('messageTemplateNamespace'); }
    /** @param string|null $value */
    public function setMessageTemplateNamespace(mixed $value): void { $this->set('messageTemplateNamespace', $value); }
    /** @param string|null $value */
    public function messageTemplateNamespace(mixed $value): static { return $this->set('messageTemplateNamespace', $value); }

    /** @return string|null */
    public function getName(): mixed { return $this->get('name'); }
    /** @param string|null $value */
    public function setName(mixed $value): void { $this->set('name', $value); }
    /** @param string|null $value */
    public function name(mixed $value): static { return $this->set('name', $value); }

    /** @return string|null */
    public function getTimezoneId(): mixed { return $this->get('timezoneId'); }
    /** @param string|null $value */
    public function setTimezoneId(mixed $value): void { $this->set('timezoneId', $value); }
    /** @param string|null $value */
    public function timezoneId(mixed $value): static { return $this->set('timezoneId', $value); }

    /** @return string|null */
    public function getCurrency(): mixed { return $this->get('currency'); }
    /** @param string|null $value */
    public function setCurrency(mixed $value): void { $this->set('currency', $value); }
    /** @param string|null $value */
    public function currency(mixed $value): static { return $this->set('currency', $value); }

    /** @return string|null */
    public function getId(): mixed { return $this->get('id'); }
    /** @param string|null $value */
    public function setId(mixed $value): void { $this->set('id', $value); }
    /** @param string|null $value */
    public function id(mixed $value): static { return $this->set('id', $value); }
}
