<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappNamedParamExample extends AbstractModel
{
    protected const FIELDS = [
        'paramName' => ['param_name', 'String'],
        'example' => ['example', 'String'],
    ];

    /** @return string|null */
    public function getParamName(): mixed { return $this->get('paramName'); }
    /** @param string|null $value */
    public function setParamName(mixed $value): void { $this->set('paramName', $value); }
    /** @param string|null $value */
    public function paramName(mixed $value): static { return $this->set('paramName', $value); }

    /** @return string|null */
    public function getExample(): mixed { return $this->get('example'); }
    /** @param string|null $value */
    public function setExample(mixed $value): void { $this->set('example', $value); }
    /** @param string|null $value */
    public function example(mixed $value): static { return $this->set('example', $value); }
}
