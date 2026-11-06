<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class ConversionCustomData extends AbstractModel
{
    protected const FIELDS = [
        'value' => ['value', 'BigDecimal'],
        'currency' => ['currency', 'String'],
        'contentName' => ['content_name', 'String'],
        'contentCategory' => ['content_category', 'String'],
        'contentIds' => ['content_ids', 'List<String>'],
        'numItems' => ['num_items', 'Integer'],
        'orderId' => ['order_id', 'String'],
        'searchString' => ['search_string', 'String'],
        'status' => ['status', 'String'],
    ];

    /** @return float|string|null */
    public function getValue(): mixed { return $this->get('value'); }
    /** @param float|string|null $value */
    public function setValue(mixed $value): void { $this->set('value', $value); }
    /** @param float|string|null $value */
    public function value(mixed $value): static { return $this->set('value', $value); }

    /** @return string|null */
    public function getCurrency(): mixed { return $this->get('currency'); }
    /** @param string|null $value */
    public function setCurrency(mixed $value): void { $this->set('currency', $value); }
    /** @param string|null $value */
    public function currency(mixed $value): static { return $this->set('currency', $value); }

    /** @return string|null */
    public function getContentName(): mixed { return $this->get('contentName'); }
    /** @param string|null $value */
    public function setContentName(mixed $value): void { $this->set('contentName', $value); }
    /** @param string|null $value */
    public function contentName(mixed $value): static { return $this->set('contentName', $value); }

    /** @return string|null */
    public function getContentCategory(): mixed { return $this->get('contentCategory'); }
    /** @param string|null $value */
    public function setContentCategory(mixed $value): void { $this->set('contentCategory', $value); }
    /** @param string|null $value */
    public function contentCategory(mixed $value): static { return $this->set('contentCategory', $value); }

    /** @return list<string>|null */
    public function getContentIds(): mixed { return $this->get('contentIds'); }
    /** @param list<string>|null $value */
    public function setContentIds(mixed $value): void { $this->set('contentIds', $value); }
    /** @param list<string>|null $value */
    public function contentIds(mixed $value): static { return $this->set('contentIds', $value); }

    /** @return int|null */
    public function getNumItems(): mixed { return $this->get('numItems'); }
    /** @param int|null $value */
    public function setNumItems(mixed $value): void { $this->set('numItems', $value); }
    /** @param int|null $value */
    public function numItems(mixed $value): static { return $this->set('numItems', $value); }

    /** @return string|null */
    public function getOrderId(): mixed { return $this->get('orderId'); }
    /** @param string|null $value */
    public function setOrderId(mixed $value): void { $this->set('orderId', $value); }
    /** @param string|null $value */
    public function orderId(mixed $value): static { return $this->set('orderId', $value); }

    /** @return string|null */
    public function getSearchString(): mixed { return $this->get('searchString'); }
    /** @param string|null $value */
    public function setSearchString(mixed $value): void { $this->set('searchString', $value); }
    /** @param string|null $value */
    public function searchString(mixed $value): static { return $this->set('searchString', $value); }

    /** @return string|null */
    public function getStatus(): mixed { return $this->get('status'); }
    /** @param string|null $value */
    public function setStatus(mixed $value): void { $this->set('status', $value); }
    /** @param string|null $value */
    public function status(mixed $value): static { return $this->set('status', $value); }
}
