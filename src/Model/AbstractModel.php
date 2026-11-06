<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

/** Preserves JSON field names, nested models and unknown extension fields. */
abstract class AbstractModel implements \JsonSerializable
{
    protected const FIELDS = [];
    protected const DEFAULTS = [];
    protected const SCALAR = null;
    private array $values = [];

    public function __construct(mixed $data = [])
    {
        $this->values = static::DEFAULTS;
        if (static::SCALAR !== null && !is_array($data) && !is_object($data)) {
            $data = [static::SCALAR => $data];
        }
        if (!is_array($data) && !is_object($data)) {
            throw new \InvalidArgumentException(static::class . ' expects an object');
        }
        foreach ((array) $data as $key => $value) {
            $this->set((string) $key, $value);
        }
    }

    public function set(string $name, mixed $value): static
    {
        foreach (static::FIELDS as $field => [$wire, $type]) {
            if ($name === $field || $name === $wire) {
                $this->values[$field] = Hydrator::convert($value, $type);
                return $this;
            }
        }
        $this->values[$name] = $value;
        return $this;
    }

    public function get(string $name): mixed { return $this->values[$name] ?? null; }
    public function putAdditionalProperty(string $name, mixed $value): static { return $this->set($name, $value); }
    public function getAdditionalProperties(): array { return array_diff_key($this->values, static::FIELDS); }

    public function jsonSerialize(): mixed
    {
        if (static::SCALAR !== null) {
            return $this->get(static::SCALAR);
        }
        $result = [];
        foreach ($this->values as $name => $value) {
            if ($value !== null) {
                $result[static::FIELDS[$name][0] ?? $name] = $value;
            }
        }
        return (object) $result;
    }

    public function toArray(): mixed
    {
        return json_decode(json_encode($this, JSON_THROW_ON_ERROR), true, 512, JSON_THROW_ON_ERROR | JSON_BIGINT_AS_STRING);
    }
}
