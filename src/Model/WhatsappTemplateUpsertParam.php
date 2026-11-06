<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateUpsertParam extends AbstractModel
{
    protected const FIELDS = [
        'name' => ['name', 'String'],
        'languages' => ['languages', 'List<String>'],
        'category' => ['category', 'String'],
        'components' => ['components', 'List<JsonNode>'],
        'messageSendTtlSeconds' => ['message_send_ttl_seconds', 'Long'],
    ];

    /** @return string|null */
    public function getName(): mixed { return $this->get('name'); }
    /** @param string|null $value */
    public function setName(mixed $value): void { $this->set('name', $value); }
    /** @param string|null $value */
    public function name(mixed $value): static { return $this->set('name', $value); }

    /** @return list<string>|null */
    public function getLanguages(): mixed { return $this->get('languages'); }
    /** @param list<string>|null $value */
    public function setLanguages(mixed $value): void { $this->set('languages', $value); }
    /** @param list<string>|null $value */
    public function languages(mixed $value): static { return $this->set('languages', $value); }

    /** @return string|null */
    public function getCategory(): mixed { return $this->get('category'); }
    /** @param string|null $value */
    public function setCategory(mixed $value): void { $this->set('category', $value); }
    /** @param string|null $value */
    public function category(mixed $value): static { return $this->set('category', $value); }

    /** @return list<mixed>|null */
    public function getComponents(): mixed { return $this->get('components'); }
    /** @param list<mixed>|null $value */
    public function setComponents(mixed $value): void { $this->set('components', $value); }
    /** @param list<mixed>|null $value */
    public function components(mixed $value): static { return $this->set('components', $value); }

    /** @return int|string|null */
    public function getMessageSendTtlSeconds(): mixed { return $this->get('messageSendTtlSeconds'); }
    /** @param int|string|null $value */
    public function setMessageSendTtlSeconds(mixed $value): void { $this->set('messageSendTtlSeconds', $value); }
    /** @param int|string|null $value */
    public function messageSendTtlSeconds(mixed $value): static { return $this->set('messageSendTtlSeconds', $value); }
}
