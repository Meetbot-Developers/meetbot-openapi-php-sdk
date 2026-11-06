<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateMigrateParam extends AbstractModel
{
    protected const FIELDS = [
        'sourceWabaId' => ['source_waba_id', 'String'],
        'pageNumber' => ['page_number', 'Long'],
        'count' => ['count', 'Long'],
        'templateIds' => ['template_ids', 'List<String>'],
    ];

    /** @return string|null */
    public function getSourceWabaId(): mixed { return $this->get('sourceWabaId'); }
    /** @param string|null $value */
    public function setSourceWabaId(mixed $value): void { $this->set('sourceWabaId', $value); }
    /** @param string|null $value */
    public function sourceWabaId(mixed $value): static { return $this->set('sourceWabaId', $value); }

    /** @return int|string|null */
    public function getPageNumber(): mixed { return $this->get('pageNumber'); }
    /** @param int|string|null $value */
    public function setPageNumber(mixed $value): void { $this->set('pageNumber', $value); }
    /** @param int|string|null $value */
    public function pageNumber(mixed $value): static { return $this->set('pageNumber', $value); }

    /** @return int|string|null */
    public function getCount(): mixed { return $this->get('count'); }
    /** @param int|string|null $value */
    public function setCount(mixed $value): void { $this->set('count', $value); }
    /** @param int|string|null $value */
    public function count(mixed $value): static { return $this->set('count', $value); }

    /** @return list<string>|null */
    public function getTemplateIds(): mixed { return $this->get('templateIds'); }
    /** @param list<string>|null $value */
    public function setTemplateIds(mixed $value): void { $this->set('templateIds', $value); }
    /** @param list<string>|null $value */
    public function templateIds(mixed $value): static { return $this->set('templateIds', $value); }
}
