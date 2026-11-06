<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappFlowPreviewResult extends AbstractModel
{
    protected const FIELDS = [
        'id' => ['id', 'String'],
        'preview' => ['preview', 'WhatsappFlowPreviewInfo'],
    ];

    /** @return string|null */
    public function getId(): mixed { return $this->get('id'); }
    /** @param string|null $value */
    public function setId(mixed $value): void { $this->set('id', $value); }
    /** @param string|null $value */
    public function id(mixed $value): static { return $this->set('id', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappFlowPreviewInfo|null */
    public function getPreview(): mixed { return $this->get('preview'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappFlowPreviewInfo|null $value */
    public function setPreview(mixed $value): void { $this->set('preview', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappFlowPreviewInfo|null $value */
    public function preview(mixed $value): static { return $this->set('preview', $value); }
}
