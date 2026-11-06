<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateArchiveResult extends AbstractModel
{
    protected const FIELDS = [
        'archivedTemplates' => ['archived_templates', 'List<String>'],
        'failedTemplates' => ['failed_templates', 'WhatsappTemplateArchiveResultFailedTemplates'],
    ];

    /** @return list<string>|null */
    public function getArchivedTemplates(): mixed { return $this->get('archivedTemplates'); }
    /** @param list<string>|null $value */
    public function setArchivedTemplates(mixed $value): void { $this->set('archivedTemplates', $value); }
    /** @param list<string>|null $value */
    public function archivedTemplates(mixed $value): static { return $this->set('archivedTemplates', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappTemplateArchiveResultFailedTemplates|null */
    public function getFailedTemplates(): mixed { return $this->get('failedTemplates'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappTemplateArchiveResultFailedTemplates|null $value */
    public function setFailedTemplates(mixed $value): void { $this->set('failedTemplates', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappTemplateArchiveResultFailedTemplates|null $value */
    public function failedTemplates(mixed $value): static { return $this->set('failedTemplates', $value); }
}
