<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class CtwaConversionPostbackRequest extends AbstractModel
{
    protected const FIELDS = [
        'wabaId' => ['wabaId', 'String'],
        'datasetId' => ['datasetId', 'String'],
        'param' => ['param', 'CtwaConversionPostbackParam'],
    ];

    /** @return string|null */
    public function getWabaId(): mixed { return $this->get('wabaId'); }
    /** @param string|null $value */
    public function setWabaId(mixed $value): void { $this->set('wabaId', $value); }
    /** @param string|null $value */
    public function wabaId(mixed $value): static { return $this->set('wabaId', $value); }

    /** @return string|null */
    public function getDatasetId(): mixed { return $this->get('datasetId'); }
    /** @param string|null $value */
    public function setDatasetId(mixed $value): void { $this->set('datasetId', $value); }
    /** @param string|null $value */
    public function datasetId(mixed $value): static { return $this->set('datasetId', $value); }

    /** @return \Meetbot\OpenApi\Model\CtwaConversionPostbackParam|null */
    public function getParam(): mixed { return $this->get('param'); }
    /** @param \Meetbot\OpenApi\Model\CtwaConversionPostbackParam|null $value */
    public function setParam(mixed $value): void { $this->set('param', $value); }
    /** @param \Meetbot\OpenApi\Model\CtwaConversionPostbackParam|null $value */
    public function param(mixed $value): static { return $this->set('param', $value); }
}
