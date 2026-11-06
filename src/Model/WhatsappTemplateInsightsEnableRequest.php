<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateInsightsEnableRequest extends AbstractModel
{
    protected const FIELDS = [
        'wabaId' => ['wabaId', 'String'],
    ];

    /** @return string|null */
    public function getWabaId(): mixed { return $this->get('wabaId'); }
    /** @param string|null $value */
    public function setWabaId(mixed $value): void { $this->set('wabaId', $value); }
    /** @param string|null $value */
    public function wabaId(mixed $value): static { return $this->set('wabaId', $value); }
}
