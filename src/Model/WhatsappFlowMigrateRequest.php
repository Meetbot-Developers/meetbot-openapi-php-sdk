<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappFlowMigrateRequest extends AbstractModel
{
    protected const FIELDS = [
        'destinationWabaId' => ['destinationWabaId', 'String'],
        'sourceWabaId' => ['sourceWabaId', 'String'],
        'sourceFlowNames' => ['sourceFlowNames', 'List<String>'],
    ];

    /** @return string|null */
    public function getDestinationWabaId(): mixed { return $this->get('destinationWabaId'); }
    /** @param string|null $value */
    public function setDestinationWabaId(mixed $value): void { $this->set('destinationWabaId', $value); }
    /** @param string|null $value */
    public function destinationWabaId(mixed $value): static { return $this->set('destinationWabaId', $value); }

    /** @return string|null */
    public function getSourceWabaId(): mixed { return $this->get('sourceWabaId'); }
    /** @param string|null $value */
    public function setSourceWabaId(mixed $value): void { $this->set('sourceWabaId', $value); }
    /** @param string|null $value */
    public function sourceWabaId(mixed $value): static { return $this->set('sourceWabaId', $value); }

    /** @return list<string>|null */
    public function getSourceFlowNames(): mixed { return $this->get('sourceFlowNames'); }
    /** @param list<string>|null $value */
    public function setSourceFlowNames(mixed $value): void { $this->set('sourceFlowNames', $value); }
    /** @param list<string>|null $value */
    public function sourceFlowNames(mixed $value): static { return $this->set('sourceFlowNames', $value); }
}
