<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappFlowIdRequest extends AbstractModel
{
    protected const FIELDS = [
        'flowId' => ['flowId', 'String'],
    ];

    /** @return string|null */
    public function getFlowId(): mixed { return $this->get('flowId'); }
    /** @param string|null $value */
    public function setFlowId(mixed $value): void { $this->set('flowId', $value); }
    /** @param string|null $value */
    public function flowId(mixed $value): static { return $this->set('flowId', $value); }
}
