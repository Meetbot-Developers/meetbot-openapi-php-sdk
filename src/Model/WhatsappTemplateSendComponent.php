<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateSendComponent extends AbstractModel
{
    protected const FIELDS = [
        'type' => ['type', 'String'],
        'subType' => ['sub_type', 'String'],
        'index' => ['index', 'String'],
        'parameters' => ['parameters', 'List<WhatsappMessageParameter>'],
    ];

    /** @return string|null */
    public function getType(): mixed { return $this->get('type'); }
    /** @param string|null $value */
    public function setType(mixed $value): void { $this->set('type', $value); }
    /** @param string|null $value */
    public function type(mixed $value): static { return $this->set('type', $value); }

    /** @return string|null */
    public function getSubType(): mixed { return $this->get('subType'); }
    /** @param string|null $value */
    public function setSubType(mixed $value): void { $this->set('subType', $value); }
    /** @param string|null $value */
    public function subType(mixed $value): static { return $this->set('subType', $value); }

    /** @return string|null */
    public function getIndex(): mixed { return $this->get('index'); }
    /** @param string|null $value */
    public function setIndex(mixed $value): void { $this->set('index', $value); }
    /** @param string|null $value */
    public function index(mixed $value): static { return $this->set('index', $value); }

    /** @return list<\Meetbot\OpenApi\Model\WhatsappMessageParameter>|null */
    public function getParameters(): mixed { return $this->get('parameters'); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappMessageParameter>|null $value */
    public function setParameters(mixed $value): void { $this->set('parameters', $value); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappMessageParameter>|null $value */
    public function parameters(mixed $value): static { return $this->set('parameters', $value); }
}
