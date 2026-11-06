<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateLanguageObject extends AbstractModel
{
    protected const FIELDS = [
        'code' => ['code', 'String'],
        'policy' => ['policy', 'String'],
    ];

    /** @return string|null */
    public function getCode(): mixed { return $this->get('code'); }
    /** @param string|null $value */
    public function setCode(mixed $value): void { $this->set('code', $value); }
    /** @param string|null $value */
    public function code(mixed $value): static { return $this->set('code', $value); }

    /** @return string|null */
    public function getPolicy(): mixed { return $this->get('policy'); }
    /** @param string|null $value */
    public function setPolicy(mixed $value): void { $this->set('policy', $value); }
    /** @param string|null $value */
    public function policy(mixed $value): static { return $this->set('policy', $value); }
}
