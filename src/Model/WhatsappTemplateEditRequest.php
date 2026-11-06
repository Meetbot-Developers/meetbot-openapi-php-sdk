<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateEditRequest extends AbstractModel
{
    protected const FIELDS = [
        'whatsappBusinessAccountId' => ['whatsappBusinessAccountId', 'String'],
        'templateId' => ['templateId', 'String'],
        'param' => ['param', 'WhatsappMessageTemplateParam'],
    ];

    /** @return string|null */
    public function getWhatsappBusinessAccountId(): mixed { return $this->get('whatsappBusinessAccountId'); }
    /** @param string|null $value */
    public function setWhatsappBusinessAccountId(mixed $value): void { $this->set('whatsappBusinessAccountId', $value); }
    /** @param string|null $value */
    public function whatsappBusinessAccountId(mixed $value): static { return $this->set('whatsappBusinessAccountId', $value); }

    /** @return string|null */
    public function getTemplateId(): mixed { return $this->get('templateId'); }
    /** @param string|null $value */
    public function setTemplateId(mixed $value): void { $this->set('templateId', $value); }
    /** @param string|null $value */
    public function templateId(mixed $value): static { return $this->set('templateId', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappMessageTemplateParam|null */
    public function getParam(): mixed { return $this->get('param'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappMessageTemplateParam|null $value */
    public function setParam(mixed $value): void { $this->set('param', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappMessageTemplateParam|null $value */
    public function param(mixed $value): static { return $this->set('param', $value); }
}
