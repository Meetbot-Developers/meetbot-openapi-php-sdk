<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateUpsertResultDataItem extends AbstractModel
{
    protected const FIELDS = [
        'id' => ['id', 'String'],
        'language' => ['language', 'String'],
        'status' => ['status', 'String'],
    ];

    /** @return string|null */
    public function getId(): mixed { return $this->get('id'); }
    /** @param string|null $value */
    public function setId(mixed $value): void { $this->set('id', $value); }
    /** @param string|null $value */
    public function id(mixed $value): static { return $this->set('id', $value); }

    /** @return string|null */
    public function getLanguage(): mixed { return $this->get('language'); }
    /** @param string|null $value */
    public function setLanguage(mixed $value): void { $this->set('language', $value); }
    /** @param string|null $value */
    public function language(mixed $value): static { return $this->set('language', $value); }

    /** @return string|null */
    public function getStatus(): mixed { return $this->get('status'); }
    /** @param string|null $value */
    public function setStatus(mixed $value): void { $this->set('status', $value); }
    /** @param string|null $value */
    public function status(mixed $value): static { return $this->set('status', $value); }
}
