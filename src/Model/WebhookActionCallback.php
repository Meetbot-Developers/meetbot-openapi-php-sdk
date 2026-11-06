<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WebhookActionCallback extends AbstractModel
{
    protected const FIELDS = [
        'type' => ['type', 'String'],
        'msg' => ['msg', 'WebhookActionMsg'],
    ];

    /** @return string|null */
    public function getType(): mixed { return $this->get('type'); }
    /** @param string|null $value */
    public function setType(mixed $value): void { $this->set('type', $value); }
    /** @param string|null $value */
    public function type(mixed $value): static { return $this->set('type', $value); }

    /** @return \Meetbot\OpenApi\Model\WebhookActionMsg|null */
    public function getMsg(): mixed { return $this->get('msg'); }
    /** @param \Meetbot\OpenApi\Model\WebhookActionMsg|null $value */
    public function setMsg(mixed $value): void { $this->set('msg', $value); }
    /** @param \Meetbot\OpenApi\Model\WebhookActionMsg|null $value */
    public function msg(mixed $value): static { return $this->set('msg', $value); }
}
