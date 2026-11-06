<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class FlowMonitoringWebhookData extends AbstractModel
{
    protected const FIELDS = [
        'type' => ['type', 'String'],
        'msg' => ['msg', 'FlowMonitoringWebhookDataMsg'],
    ];

    /** @return string|null */
    public function getType(): mixed { return $this->get('type'); }
    /** @param string|null $value */
    public function setType(mixed $value): void { $this->set('type', $value); }
    /** @param string|null $value */
    public function type(mixed $value): static { return $this->set('type', $value); }

    /** @return \Meetbot\OpenApi\Model\FlowMonitoringWebhookDataMsg|null */
    public function getMsg(): mixed { return $this->get('msg'); }
    /** @param \Meetbot\OpenApi\Model\FlowMonitoringWebhookDataMsg|null $value */
    public function setMsg(mixed $value): void { $this->set('msg', $value); }
    /** @param \Meetbot\OpenApi\Model\FlowMonitoringWebhookDataMsg|null $value */
    public function msg(mixed $value): static { return $this->set('msg', $value); }
}
