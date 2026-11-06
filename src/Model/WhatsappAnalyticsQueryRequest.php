<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappAnalyticsQueryRequest extends AbstractModel
{
    protected const FIELDS = [
        'wabaId' => ['wabaId', 'String'],
        'field' => ['field', 'WhatsappAnalyticsField'],
        'start' => ['start', 'Long'],
        'end' => ['end', 'Long'],
        'granularity' => ['granularity', 'String'],
        'phoneNumbers' => ['phoneNumbers', 'String'],
        'countryCodes' => ['countryCodes', 'String'],
        'productTypes' => ['productTypes', 'String'],
        'metricTypes' => ['metricTypes', 'String'],
        'pricingTypes' => ['pricingTypes', 'String'],
        'pricingCategories' => ['pricingCategories', 'String'],
        'dimensions' => ['dimensions', 'String'],
        'conversationCategories' => ['conversationCategories', 'String'],
        'conversationTypes' => ['conversationTypes', 'String'],
        'conversationDirections' => ['conversationDirections', 'String'],
        'directions' => ['directions', 'String'],
        'templateIds' => ['templateIds', 'String'],
        'templateGroupIds' => ['templateGroupIds', 'String'],
        'groupIds' => ['groupIds', 'String'],
        'productType' => ['productType', 'String'],
        'useWabaTimezone' => ['useWabaTimezone', 'Boolean'],
    ];

    /** @return string|null */
    public function getWabaId(): mixed { return $this->get('wabaId'); }
    /** @param string|null $value */
    public function setWabaId(mixed $value): void { $this->set('wabaId', $value); }
    /** @param string|null $value */
    public function wabaId(mixed $value): static { return $this->set('wabaId', $value); }

    /** @return \Meetbot\OpenApi\Model\Enums\WhatsappAnalyticsField|null */
    public function getField(): mixed { return $this->get('field'); }
    /** @param \Meetbot\OpenApi\Model\Enums\WhatsappAnalyticsField|null $value */
    public function setField(mixed $value): void { $this->set('field', $value); }
    /** @param \Meetbot\OpenApi\Model\Enums\WhatsappAnalyticsField|null $value */
    public function field(mixed $value): static { return $this->set('field', $value); }

    /** @return int|string|null */
    public function getStart(): mixed { return $this->get('start'); }
    /** @param int|string|null $value */
    public function setStart(mixed $value): void { $this->set('start', $value); }
    /** @param int|string|null $value */
    public function start(mixed $value): static { return $this->set('start', $value); }

    /** @return int|string|null */
    public function getEnd(): mixed { return $this->get('end'); }
    /** @param int|string|null $value */
    public function setEnd(mixed $value): void { $this->set('end', $value); }
    /** @param int|string|null $value */
    public function end(mixed $value): static { return $this->set('end', $value); }

    /** @return string|null */
    public function getGranularity(): mixed { return $this->get('granularity'); }
    /** @param string|null $value */
    public function setGranularity(mixed $value): void { $this->set('granularity', $value); }
    /** @param string|null $value */
    public function granularity(mixed $value): static { return $this->set('granularity', $value); }

    /** @return string|null */
    public function getPhoneNumbers(): mixed { return $this->get('phoneNumbers'); }
    /** @param string|null $value */
    public function setPhoneNumbers(mixed $value): void { $this->set('phoneNumbers', $value); }
    /** @param string|null $value */
    public function phoneNumbers(mixed $value): static { return $this->set('phoneNumbers', $value); }

    /** @return string|null */
    public function getCountryCodes(): mixed { return $this->get('countryCodes'); }
    /** @param string|null $value */
    public function setCountryCodes(mixed $value): void { $this->set('countryCodes', $value); }
    /** @param string|null $value */
    public function countryCodes(mixed $value): static { return $this->set('countryCodes', $value); }

    /** @return string|null */
    public function getProductTypes(): mixed { return $this->get('productTypes'); }
    /** @param string|null $value */
    public function setProductTypes(mixed $value): void { $this->set('productTypes', $value); }
    /** @param string|null $value */
    public function productTypes(mixed $value): static { return $this->set('productTypes', $value); }

    /** @return string|null */
    public function getMetricTypes(): mixed { return $this->get('metricTypes'); }
    /** @param string|null $value */
    public function setMetricTypes(mixed $value): void { $this->set('metricTypes', $value); }
    /** @param string|null $value */
    public function metricTypes(mixed $value): static { return $this->set('metricTypes', $value); }

    /** @return string|null */
    public function getPricingTypes(): mixed { return $this->get('pricingTypes'); }
    /** @param string|null $value */
    public function setPricingTypes(mixed $value): void { $this->set('pricingTypes', $value); }
    /** @param string|null $value */
    public function pricingTypes(mixed $value): static { return $this->set('pricingTypes', $value); }

    /** @return string|null */
    public function getPricingCategories(): mixed { return $this->get('pricingCategories'); }
    /** @param string|null $value */
    public function setPricingCategories(mixed $value): void { $this->set('pricingCategories', $value); }
    /** @param string|null $value */
    public function pricingCategories(mixed $value): static { return $this->set('pricingCategories', $value); }

    /** @return string|null */
    public function getDimensions(): mixed { return $this->get('dimensions'); }
    /** @param string|null $value */
    public function setDimensions(mixed $value): void { $this->set('dimensions', $value); }
    /** @param string|null $value */
    public function dimensions(mixed $value): static { return $this->set('dimensions', $value); }

    /** @return string|null */
    public function getConversationCategories(): mixed { return $this->get('conversationCategories'); }
    /** @param string|null $value */
    public function setConversationCategories(mixed $value): void { $this->set('conversationCategories', $value); }
    /** @param string|null $value */
    public function conversationCategories(mixed $value): static { return $this->set('conversationCategories', $value); }

    /** @return string|null */
    public function getConversationTypes(): mixed { return $this->get('conversationTypes'); }
    /** @param string|null $value */
    public function setConversationTypes(mixed $value): void { $this->set('conversationTypes', $value); }
    /** @param string|null $value */
    public function conversationTypes(mixed $value): static { return $this->set('conversationTypes', $value); }

    /** @return string|null */
    public function getConversationDirections(): mixed { return $this->get('conversationDirections'); }
    /** @param string|null $value */
    public function setConversationDirections(mixed $value): void { $this->set('conversationDirections', $value); }
    /** @param string|null $value */
    public function conversationDirections(mixed $value): static { return $this->set('conversationDirections', $value); }

    /** @return string|null */
    public function getDirections(): mixed { return $this->get('directions'); }
    /** @param string|null $value */
    public function setDirections(mixed $value): void { $this->set('directions', $value); }
    /** @param string|null $value */
    public function directions(mixed $value): static { return $this->set('directions', $value); }

    /** @return string|null */
    public function getTemplateIds(): mixed { return $this->get('templateIds'); }
    /** @param string|null $value */
    public function setTemplateIds(mixed $value): void { $this->set('templateIds', $value); }
    /** @param string|null $value */
    public function templateIds(mixed $value): static { return $this->set('templateIds', $value); }

    /** @return string|null */
    public function getTemplateGroupIds(): mixed { return $this->get('templateGroupIds'); }
    /** @param string|null $value */
    public function setTemplateGroupIds(mixed $value): void { $this->set('templateGroupIds', $value); }
    /** @param string|null $value */
    public function templateGroupIds(mixed $value): static { return $this->set('templateGroupIds', $value); }

    /** @return string|null */
    public function getGroupIds(): mixed { return $this->get('groupIds'); }
    /** @param string|null $value */
    public function setGroupIds(mixed $value): void { $this->set('groupIds', $value); }
    /** @param string|null $value */
    public function groupIds(mixed $value): static { return $this->set('groupIds', $value); }

    /** @return string|null */
    public function getProductType(): mixed { return $this->get('productType'); }
    /** @param string|null $value */
    public function setProductType(mixed $value): void { $this->set('productType', $value); }
    /** @param string|null $value */
    public function productType(mixed $value): static { return $this->set('productType', $value); }

    /** @return bool|null */
    public function getUseWabaTimezone(): mixed { return $this->get('useWabaTimezone'); }
    /** @param bool|null $value */
    public function setUseWabaTimezone(mixed $value): void { $this->set('useWabaTimezone', $value); }
    /** @param bool|null $value */
    public function useWabaTimezone(mixed $value): static { return $this->set('useWabaTimezone', $value); }
}
