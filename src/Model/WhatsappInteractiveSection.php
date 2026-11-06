<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappInteractiveSection extends AbstractModel
{
    protected const FIELDS = [
        'title' => ['title', 'String'],
        'rows' => ['rows', 'List<WhatsappInteractiveRow>'],
    ];

    /** @return string|null */
    public function getTitle(): mixed { return $this->get('title'); }
    /** @param string|null $value */
    public function setTitle(mixed $value): void { $this->set('title', $value); }
    /** @param string|null $value */
    public function title(mixed $value): static { return $this->set('title', $value); }

    /** @return list<\Meetbot\OpenApi\Model\WhatsappInteractiveRow>|null */
    public function getRows(): mixed { return $this->get('rows'); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappInteractiveRow>|null $value */
    public function setRows(mixed $value): void { $this->set('rows', $value); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappInteractiveRow>|null $value */
    public function rows(mixed $value): static { return $this->set('rows', $value); }
}
