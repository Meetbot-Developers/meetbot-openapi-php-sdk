<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateGroupCreateRequest extends AbstractModel
{
    protected const FIELDS = [
        'wabaId' => ['wabaId', 'String'],
        'param' => ['param', 'JsonNode'],
    ];

    /** @return string|null */
    public function getWabaId(): mixed { return $this->get('wabaId'); }
    /** @param string|null $value */
    public function setWabaId(mixed $value): void { $this->set('wabaId', $value); }
    /** @param string|null $value */
    public function wabaId(mixed $value): static { return $this->set('wabaId', $value); }

    /** @return mixed|null */
    public function getParam(): mixed { return $this->get('param'); }
    /** @param mixed|null $value */
    public function setParam(mixed $value): void { $this->set('param', $value); }
    /** @param mixed|null $value */
    public function param(mixed $value): static { return $this->set('param', $value); }
}
