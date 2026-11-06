<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappGroupCreateRequest extends AbstractModel
{
    protected const FIELDS = [
        'phoneId' => ['phoneId', 'String'],
        'param' => ['param', 'JsonNode'],
    ];

    /** @return string|null */
    public function getPhoneId(): mixed { return $this->get('phoneId'); }
    /** @param string|null $value */
    public function setPhoneId(mixed $value): void { $this->set('phoneId', $value); }
    /** @param string|null $value */
    public function phoneId(mixed $value): static { return $this->set('phoneId', $value); }

    /** @return mixed|null */
    public function getParam(): mixed { return $this->get('param'); }
    /** @param mixed|null $value */
    public function setParam(mixed $value): void { $this->set('param', $value); }
    /** @param mixed|null $value */
    public function param(mixed $value): static { return $this->set('param', $value); }
}
