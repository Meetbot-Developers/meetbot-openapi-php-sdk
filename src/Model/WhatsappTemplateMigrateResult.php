<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateMigrateResult extends AbstractModel
{
    protected const FIELDS = [
        'migratedTemplates' => ['migrated_templates', 'List<String>'],
        'failedTemplates' => ['failed_templates', 'List<JsonNode>'],
    ];

    /** @return list<string>|null */
    public function getMigratedTemplates(): mixed { return $this->get('migratedTemplates'); }
    /** @param list<string>|null $value */
    public function setMigratedTemplates(mixed $value): void { $this->set('migratedTemplates', $value); }
    /** @param list<string>|null $value */
    public function migratedTemplates(mixed $value): static { return $this->set('migratedTemplates', $value); }

    /** @return list<mixed>|null */
    public function getFailedTemplates(): mixed { return $this->get('failedTemplates'); }
    /** @param list<mixed>|null $value */
    public function setFailedTemplates(mixed $value): void { $this->set('failedTemplates', $value); }
    /** @param list<mixed>|null $value */
    public function failedTemplates(mixed $value): static { return $this->set('failedTemplates', $value); }
}
