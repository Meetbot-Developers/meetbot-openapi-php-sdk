<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappFlowCreateParam extends AbstractModel
{
    protected const FIELDS = [
        'name' => ['name', 'String'],
        'categories' => ['categories', 'List<WhatsappFlowCategory>'],
        'flowJson' => ['flow_json', 'String'],
        'endpointUri' => ['endpoint_uri', 'String'],
        'publish' => ['publish', 'Boolean'],
        'cloneFlowId' => ['clone_flow_id', 'String'],
    ];

    /** @return string|null */
    public function getName(): mixed { return $this->get('name'); }
    /** @param string|null $value */
    public function setName(mixed $value): void { $this->set('name', $value); }
    /** @param string|null $value */
    public function name(mixed $value): static { return $this->set('name', $value); }

    /** @return list<\Meetbot\OpenApi\Model\Enums\WhatsappFlowCategory>|null */
    public function getCategories(): mixed { return $this->get('categories'); }
    /** @param list<\Meetbot\OpenApi\Model\Enums\WhatsappFlowCategory>|null $value */
    public function setCategories(mixed $value): void { $this->set('categories', $value); }
    /** @param list<\Meetbot\OpenApi\Model\Enums\WhatsappFlowCategory>|null $value */
    public function categories(mixed $value): static { return $this->set('categories', $value); }

    /** @return string|null */
    public function getFlowJson(): mixed { return $this->get('flowJson'); }
    /** @param string|null $value */
    public function setFlowJson(mixed $value): void { $this->set('flowJson', $value); }
    /** @param string|null $value */
    public function flowJson(mixed $value): static { return $this->set('flowJson', $value); }

    /** @return string|null */
    public function getEndpointUri(): mixed { return $this->get('endpointUri'); }
    /** @param string|null $value */
    public function setEndpointUri(mixed $value): void { $this->set('endpointUri', $value); }
    /** @param string|null $value */
    public function endpointUri(mixed $value): static { return $this->set('endpointUri', $value); }

    /** @return bool|null */
    public function getPublish(): mixed { return $this->get('publish'); }
    /** @param bool|null $value */
    public function setPublish(mixed $value): void { $this->set('publish', $value); }
    /** @param bool|null $value */
    public function publish(mixed $value): static { return $this->set('publish', $value); }

    /** @return string|null */
    public function getCloneFlowId(): mixed { return $this->get('cloneFlowId'); }
    /** @param string|null $value */
    public function setCloneFlowId(mixed $value): void { $this->set('cloneFlowId', $value); }
    /** @param string|null $value */
    public function cloneFlowId(mixed $value): static { return $this->set('cloneFlowId', $value); }
}
