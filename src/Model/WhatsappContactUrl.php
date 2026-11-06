<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappContactUrl extends AbstractModel
{
    protected const FIELDS = [
        'url' => ['url', 'String'],
        'type' => ['type', 'String'],
    ];

    /** @return string|null */
    public function getUrl(): mixed { return $this->get('url'); }
    /** @param string|null $value */
    public function setUrl(mixed $value): void { $this->set('url', $value); }
    /** @param string|null $value */
    public function url(mixed $value): static { return $this->set('url', $value); }

    /** @return string|null */
    public function getType(): mixed { return $this->get('type'); }
    /** @param string|null $value */
    public function setType(mixed $value): void { $this->set('type', $value); }
    /** @param string|null $value */
    public function type(mixed $value): static { return $this->set('type', $value); }
}
