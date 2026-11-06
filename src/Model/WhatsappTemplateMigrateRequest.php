<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateMigrateRequest extends AbstractModel
{
    protected const FIELDS = [
        'destinationWabaId' => ['destinationWabaId', 'String'],
        'param' => ['param', 'WhatsappTemplateMigrateParam'],
    ];

    /** @return string|null */
    public function getDestinationWabaId(): mixed { return $this->get('destinationWabaId'); }
    /** @param string|null $value */
    public function setDestinationWabaId(mixed $value): void { $this->set('destinationWabaId', $value); }
    /** @param string|null $value */
    public function destinationWabaId(mixed $value): static { return $this->set('destinationWabaId', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappTemplateMigrateParam|null */
    public function getParam(): mixed { return $this->get('param'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappTemplateMigrateParam|null $value */
    public function setParam(mixed $value): void { $this->set('param', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappTemplateMigrateParam|null $value */
    public function param(mixed $value): static { return $this->set('param', $value); }
}
