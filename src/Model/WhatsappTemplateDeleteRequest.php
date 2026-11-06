<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateDeleteRequest extends AbstractModel
{
    protected const FIELDS = [
        'whatsappBusinessAccountId' => ['whatsappBusinessAccountId', 'String'],
        'name' => ['name', 'String'],
        'hsmId' => ['hsmId', 'String'],
    ];

    /** @return string|null */
    public function getWhatsappBusinessAccountId(): mixed { return $this->get('whatsappBusinessAccountId'); }
    /** @param string|null $value */
    public function setWhatsappBusinessAccountId(mixed $value): void { $this->set('whatsappBusinessAccountId', $value); }
    /** @param string|null $value */
    public function whatsappBusinessAccountId(mixed $value): static { return $this->set('whatsappBusinessAccountId', $value); }

    /** @return string|null */
    public function getName(): mixed { return $this->get('name'); }
    /** @param string|null $value */
    public function setName(mixed $value): void { $this->set('name', $value); }
    /** @param string|null $value */
    public function name(mixed $value): static { return $this->set('name', $value); }

    /** @return string|null */
    public function getHsmId(): mixed { return $this->get('hsmId'); }
    /** @param string|null $value */
    public function setHsmId(mixed $value): void { $this->set('hsmId', $value); }
    /** @param string|null $value */
    public function hsmId(mixed $value): static { return $this->set('hsmId', $value); }
}
