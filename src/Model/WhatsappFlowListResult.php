<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappFlowListResult extends AbstractModel
{
    protected const FIELDS = [
        'data' => ['data', 'List<WhatsappFlowItem>'],
        'paging' => ['paging', 'MetaPaging'],
    ];

    /** @return list<\Meetbot\OpenApi\Model\WhatsappFlowItem>|null */
    public function getData(): mixed { return $this->get('data'); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappFlowItem>|null $value */
    public function setData(mixed $value): void { $this->set('data', $value); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappFlowItem>|null $value */
    public function data(mixed $value): static { return $this->set('data', $value); }

    /** @return \Meetbot\OpenApi\Model\MetaPaging|null */
    public function getPaging(): mixed { return $this->get('paging'); }
    /** @param \Meetbot\OpenApi\Model\MetaPaging|null $value */
    public function setPaging(mixed $value): void { $this->set('paging', $value); }
    /** @param \Meetbot\OpenApi\Model\MetaPaging|null $value */
    public function paging(mixed $value): static { return $this->set('paging', $value); }
}
