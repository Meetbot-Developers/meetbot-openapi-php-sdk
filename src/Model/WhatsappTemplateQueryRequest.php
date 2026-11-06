<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateQueryRequest extends AbstractModel
{
    protected const FIELDS = [
        'whatsappBusinessAccountId' => ['whatsappBusinessAccountId', 'String'],
        'accessToken' => ['accessToken', 'String'],
        'before' => ['before', 'String'],
        'after' => ['after', 'String'],
        'fields' => ['fields', 'List<String>'],
        'limit' => ['limit', 'String'],
    ];

    /** @return string|null */
    public function getWhatsappBusinessAccountId(): mixed { return $this->get('whatsappBusinessAccountId'); }
    /** @param string|null $value */
    public function setWhatsappBusinessAccountId(mixed $value): void { $this->set('whatsappBusinessAccountId', $value); }
    /** @param string|null $value */
    public function whatsappBusinessAccountId(mixed $value): static { return $this->set('whatsappBusinessAccountId', $value); }

    /** @return string|null */
    public function getAccessToken(): mixed { return $this->get('accessToken'); }
    /** @param string|null $value */
    public function setAccessToken(mixed $value): void { $this->set('accessToken', $value); }
    /** @param string|null $value */
    public function accessToken(mixed $value): static { return $this->set('accessToken', $value); }

    /** @return string|null */
    public function getBefore(): mixed { return $this->get('before'); }
    /** @param string|null $value */
    public function setBefore(mixed $value): void { $this->set('before', $value); }
    /** @param string|null $value */
    public function before(mixed $value): static { return $this->set('before', $value); }

    /** @return string|null */
    public function getAfter(): mixed { return $this->get('after'); }
    /** @param string|null $value */
    public function setAfter(mixed $value): void { $this->set('after', $value); }
    /** @param string|null $value */
    public function after(mixed $value): static { return $this->set('after', $value); }

    /** @return list<string>|null */
    public function getFields(): mixed { return $this->get('fields'); }
    /** @param list<string>|null $value */
    public function setFields(mixed $value): void { $this->set('fields', $value); }
    /** @param list<string>|null $value */
    public function fields(mixed $value): static { return $this->set('fields', $value); }

    /** @return string|null */
    public function getLimit(): mixed { return $this->get('limit'); }
    /** @param string|null $value */
    public function setLimit(mixed $value): void { $this->set('limit', $value); }
    /** @param string|null $value */
    public function limit(mixed $value): static { return $this->set('limit', $value); }
}
