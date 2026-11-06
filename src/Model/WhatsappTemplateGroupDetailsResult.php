<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateGroupDetailsResult extends AbstractModel
{
    protected const FIELDS = [
        'id' => ['id', 'String'],
        'name' => ['name', 'String'],
        'status' => ['status', 'String'],
        'whatsappBusinessTemplates' => ['whatsapp_business_templates', 'WhatsappTemplateGroupDetailsResultWhatsappBusinessTemplates'],
    ];

    /** @return string|null */
    public function getId(): mixed { return $this->get('id'); }
    /** @param string|null $value */
    public function setId(mixed $value): void { $this->set('id', $value); }
    /** @param string|null $value */
    public function id(mixed $value): static { return $this->set('id', $value); }

    /** @return string|null */
    public function getName(): mixed { return $this->get('name'); }
    /** @param string|null $value */
    public function setName(mixed $value): void { $this->set('name', $value); }
    /** @param string|null $value */
    public function name(mixed $value): static { return $this->set('name', $value); }

    /** @return string|null */
    public function getStatus(): mixed { return $this->get('status'); }
    /** @param string|null $value */
    public function setStatus(mixed $value): void { $this->set('status', $value); }
    /** @param string|null $value */
    public function status(mixed $value): static { return $this->set('status', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappTemplateGroupDetailsResultWhatsappBusinessTemplates|null */
    public function getWhatsappBusinessTemplates(): mixed { return $this->get('whatsappBusinessTemplates'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappTemplateGroupDetailsResultWhatsappBusinessTemplates|null $value */
    public function setWhatsappBusinessTemplates(mixed $value): void { $this->set('whatsappBusinessTemplates', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappTemplateGroupDetailsResultWhatsappBusinessTemplates|null $value */
    public function whatsappBusinessTemplates(mixed $value): static { return $this->set('whatsappBusinessTemplates', $value); }
}
