<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateUnarchiveResult extends AbstractModel
{
    protected const FIELDS = [
        'unarchivedTemplates' => ['unarchived_templates', 'List<String>'],
        'failedTemplates' => ['failed_templates', 'WhatsappTemplateUnarchiveResultFailedTemplates'],
    ];

    /** @return list<string>|null */
    public function getUnarchivedTemplates(): mixed { return $this->get('unarchivedTemplates'); }
    /** @param list<string>|null $value */
    public function setUnarchivedTemplates(mixed $value): void { $this->set('unarchivedTemplates', $value); }
    /** @param list<string>|null $value */
    public function unarchivedTemplates(mixed $value): static { return $this->set('unarchivedTemplates', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappTemplateUnarchiveResultFailedTemplates|null */
    public function getFailedTemplates(): mixed { return $this->get('failedTemplates'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappTemplateUnarchiveResultFailedTemplates|null $value */
    public function setFailedTemplates(mixed $value): void { $this->set('failedTemplates', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappTemplateUnarchiveResultFailedTemplates|null $value */
    public function failedTemplates(mixed $value): static { return $this->set('failedTemplates', $value); }
}
