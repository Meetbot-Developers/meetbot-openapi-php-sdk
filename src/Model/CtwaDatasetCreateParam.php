<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class CtwaDatasetCreateParam extends AbstractModel
{
    protected const FIELDS = [
        'datasetName' => ['dataset_name', 'String'],
    ];

    /** @return string|null */
    public function getDatasetName(): mixed { return $this->get('datasetName'); }
    /** @param string|null $value */
    public function setDatasetName(mixed $value): void { $this->set('datasetName', $value); }
    /** @param string|null $value */
    public function datasetName(mixed $value): static { return $this->set('datasetName', $value); }
}
