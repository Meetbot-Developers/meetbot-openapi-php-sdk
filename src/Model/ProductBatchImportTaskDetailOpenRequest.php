<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class ProductBatchImportTaskDetailOpenRequest extends AbstractModel
{
    protected const FIELDS = [
        'taskId' => ['taskId', 'Long'],
    ];

    /** @return int|string|null */
    public function getTaskId(): mixed { return $this->get('taskId'); }
    /** @param int|string|null $value */
    public function setTaskId(mixed $value): void { $this->set('taskId', $value); }
    /** @param int|string|null $value */
    public function taskId(mixed $value): static { return $this->set('taskId', $value); }
}
