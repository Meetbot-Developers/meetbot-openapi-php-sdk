<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateGroupUpdateRequest extends AbstractModel
{
    protected const FIELDS = [
        'templateGroupId' => ['templateGroupId', 'String'],
        'param' => ['param', 'JsonNode'],
    ];

    /** @return string|null */
    public function getTemplateGroupId(): mixed { return $this->get('templateGroupId'); }
    /** @param string|null $value */
    public function setTemplateGroupId(mixed $value): void { $this->set('templateGroupId', $value); }
    /** @param string|null $value */
    public function templateGroupId(mixed $value): static { return $this->set('templateGroupId', $value); }

    /** @return mixed|null */
    public function getParam(): mixed { return $this->get('param'); }
    /** @param mixed|null $value */
    public function setParam(mixed $value): void { $this->set('param', $value); }
    /** @param mixed|null $value */
    public function param(mixed $value): static { return $this->set('param', $value); }
}
