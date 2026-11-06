<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappFlowUpdateRequest extends AbstractModel
{
    protected const FIELDS = [
        'flowId' => ['flowId', 'String'],
        'param' => ['param', 'WhatsappFlowUpdateParam'],
    ];

    /** @return string|null */
    public function getFlowId(): mixed { return $this->get('flowId'); }
    /** @param string|null $value */
    public function setFlowId(mixed $value): void { $this->set('flowId', $value); }
    /** @param string|null $value */
    public function flowId(mixed $value): static { return $this->set('flowId', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappFlowUpdateParam|null */
    public function getParam(): mixed { return $this->get('param'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappFlowUpdateParam|null $value */
    public function setParam(mixed $value): void { $this->set('param', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappFlowUpdateParam|null $value */
    public function param(mixed $value): static { return $this->set('param', $value); }
}
