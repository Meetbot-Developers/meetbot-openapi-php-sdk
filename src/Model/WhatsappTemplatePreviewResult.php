<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplatePreviewResult extends AbstractModel
{
    protected const FIELDS = [
        'data' => ['data', 'List<WhatsappTemplatePreviewResultDataItem>'],
    ];

    /** @return list<\Meetbot\OpenApi\Model\WhatsappTemplatePreviewResultDataItem>|null */
    public function getData(): mixed { return $this->get('data'); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappTemplatePreviewResultDataItem>|null $value */
    public function setData(mixed $value): void { $this->set('data', $value); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappTemplatePreviewResultDataItem>|null $value */
    public function data(mixed $value): static { return $this->set('data', $value); }
}
