<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

final class Hydrator
{
    public static function convert(mixed $value, string $type): mixed
    {
        if ($value === null || $value instanceof AbstractModel || $value instanceof \BackedEnum) {
            return $value;
        }
        if (preg_match('/^List<(.+)>$/', $type, $matches)) {
            if (!is_array($value)) { throw new \UnexpectedValueException('Expected list for ' . $type); }
            return array_map(fn ($item) => self::convert($item, $matches[1]), $value);
        }
        if (preg_match('/^(PageResult|ApiResponse)<(.+)>$/', $type, $matches)) {
            $class = __NAMESPACE__ . '\\' . $matches[1];
            $data = (array) $value;
            $key = $matches[1] === 'PageResult' ? 'list' : 'result';
            if (isset($data[$key])) {
                $data[$key] = self::convert($data[$key], $key === 'list' ? 'List<' . $matches[2] . '>' : $matches[2]);
            }
            return new $class($data);
        }
        $enum = __NAMESPACE__ . '\\Enums\\' . $type;
        if (enum_exists($enum)) {
            // Preserve new upstream enum values rather than losing response data.
            return $enum::tryFrom((string) $value) ?? $value;
        }
        $class = __NAMESPACE__ . '\\' . $type;
        if (class_exists($class) && is_subclass_of($class, AbstractModel::class)) {
            return new $class($value);
        }
        return $value;
    }
}
