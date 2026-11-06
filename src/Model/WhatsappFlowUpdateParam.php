<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappFlowUpdateParam extends AbstractModel
{
    protected const FIELDS = [
        'name' => ['name', 'String'],
        'categories' => ['categories', 'List<WhatsappFlowCategory>'],
        'endpointUri' => ['endpoint_uri', 'String'],
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
    public function getEndpointUri(): mixed { return $this->get('endpointUri'); }
    /** @param string|null $value */
    public function setEndpointUri(mixed $value): void { $this->set('endpointUri', $value); }
    /** @param string|null $value */
    public function endpointUri(mixed $value): static { return $this->set('endpointUri', $value); }
}
