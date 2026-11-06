<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappInteractiveAction extends AbstractModel
{
    protected const FIELDS = [
        'button' => ['button', 'String'],
        'buttons' => ['buttons', 'List<WhatsappInteractiveButton>'],
        'sections' => ['sections', 'List<WhatsappInteractiveSection>'],
        'name' => ['name', 'String'],
        'catalogId' => ['catalog_id', 'String'],
        'productRetailerId' => ['product_retailer_id', 'String'],
    ];

    /** @return string|null */
    public function getButton(): mixed { return $this->get('button'); }
    /** @param string|null $value */
    public function setButton(mixed $value): void { $this->set('button', $value); }
    /** @param string|null $value */
    public function button(mixed $value): static { return $this->set('button', $value); }

    /** @return list<\Meetbot\OpenApi\Model\WhatsappInteractiveButton>|null */
    public function getButtons(): mixed { return $this->get('buttons'); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappInteractiveButton>|null $value */
    public function setButtons(mixed $value): void { $this->set('buttons', $value); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappInteractiveButton>|null $value */
    public function buttons(mixed $value): static { return $this->set('buttons', $value); }

    /** @return list<\Meetbot\OpenApi\Model\WhatsappInteractiveSection>|null */
    public function getSections(): mixed { return $this->get('sections'); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappInteractiveSection>|null $value */
    public function setSections(mixed $value): void { $this->set('sections', $value); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappInteractiveSection>|null $value */
    public function sections(mixed $value): static { return $this->set('sections', $value); }

    /** @return string|null */
    public function getName(): mixed { return $this->get('name'); }
    /** @param string|null $value */
    public function setName(mixed $value): void { $this->set('name', $value); }
    /** @param string|null $value */
    public function name(mixed $value): static { return $this->set('name', $value); }

    /** @return string|null */
    public function getCatalogId(): mixed { return $this->get('catalogId'); }
    /** @param string|null $value */
    public function setCatalogId(mixed $value): void { $this->set('catalogId', $value); }
    /** @param string|null $value */
    public function catalogId(mixed $value): static { return $this->set('catalogId', $value); }

    /** @return string|null */
    public function getProductRetailerId(): mixed { return $this->get('productRetailerId'); }
    /** @param string|null $value */
    public function setProductRetailerId(mixed $value): void { $this->set('productRetailerId', $value); }
    /** @param string|null $value */
    public function productRetailerId(mixed $value): static { return $this->set('productRetailerId', $value); }
}
