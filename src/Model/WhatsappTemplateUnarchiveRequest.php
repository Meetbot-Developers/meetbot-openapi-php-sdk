<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateUnarchiveRequest extends AbstractModel
{
    protected const FIELDS = [
        'wabaId' => ['wabaId', 'String'],
        'param' => ['param', 'WhatsappTemplateUnarchiveParam'],
    ];

    /** @return string|null */
    public function getWabaId(): mixed { return $this->get('wabaId'); }
    /** @param string|null $value */
    public function setWabaId(mixed $value): void { $this->set('wabaId', $value); }
    /** @param string|null $value */
    public function wabaId(mixed $value): static { return $this->set('wabaId', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappTemplateUnarchiveParam|null */
    public function getParam(): mixed { return $this->get('param'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappTemplateUnarchiveParam|null $value */
    public function setParam(mixed $value): void { $this->set('param', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappTemplateUnarchiveParam|null $value */
    public function param(mixed $value): static { return $this->set('param', $value); }
}
