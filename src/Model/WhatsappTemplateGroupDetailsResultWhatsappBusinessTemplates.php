<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateGroupDetailsResultWhatsappBusinessTemplates extends AbstractModel
{
    protected const FIELDS = [
        'data' => ['data', 'List<JsonNode>'],
    ];

    /** @return list<mixed>|null */
    public function getData(): mixed { return $this->get('data'); }
    /** @param list<mixed>|null $value */
    public function setData(mixed $value): void { $this->set('data', $value); }
    /** @param list<mixed>|null $value */
    public function data(mixed $value): static { return $this->set('data', $value); }
}
