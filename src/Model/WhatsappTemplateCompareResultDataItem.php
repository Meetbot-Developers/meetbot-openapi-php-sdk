<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateCompareResultDataItem extends AbstractModel
{
    protected const FIELDS = [
        'metric' => ['metric', 'String'],
        'orderByRelativeMetric' => ['order_by_relative_metric', 'List<String>'],
    ];

    /** @return string|null */
    public function getMetric(): mixed { return $this->get('metric'); }
    /** @param string|null $value */
    public function setMetric(mixed $value): void { $this->set('metric', $value); }
    /** @param string|null $value */
    public function metric(mixed $value): static { return $this->set('metric', $value); }

    /** @return list<string>|null */
    public function getOrderByRelativeMetric(): mixed { return $this->get('orderByRelativeMetric'); }
    /** @param list<string>|null $value */
    public function setOrderByRelativeMetric(mixed $value): void { $this->set('orderByRelativeMetric', $value); }
    /** @param list<string>|null $value */
    public function orderByRelativeMetric(mixed $value): static { return $this->set('orderByRelativeMetric', $value); }
}
