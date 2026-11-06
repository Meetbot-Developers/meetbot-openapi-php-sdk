<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateArchiveParam extends AbstractModel
{
    protected const FIELDS = [
        'hsmIds' => ['hsm_ids', 'List<String>'],
    ];

    /** @return list<string>|null */
    public function getHsmIds(): mixed { return $this->get('hsmIds'); }
    /** @param list<string>|null $value */
    public function setHsmIds(mixed $value): void { $this->set('hsmIds', $value); }
    /** @param list<string>|null $value */
    public function hsmIds(mixed $value): static { return $this->set('hsmIds', $value); }
}
