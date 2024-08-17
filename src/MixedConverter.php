<?php

declare(strict_types=1);

namespace Labrodev\PhpMixedConverter;

/**
 * Class MixedConverter
 *
 * PHP utility class that provides methods to convert mixed values to strings, ints or floats
 * @package Labrodev\MixedConverter
 */
final class MixedConverter
{
    /**
     * Converts a mixed value to a string.
     *
     * If the value is scalar (string, integer, float, or boolean), it is cast to a string.
     * If the value is not scalar (e.g., an array or an object), it is converted to its string representation.
     *
     * @param mixed $value The value to be converted.
     * @return string The string representation of the value.
     */
    public static function toString(mixed $value): string
    {
        return is_scalar($value) ? (string) $value : var_export($value, true);
    }

    /**
     * Converts a mixed value to a float.
     *
     * If the value is numeric (integer, float, or numeric string), it is cast to a float.
     * If the value is not numeric, it returns 0.0.
     *
     * @param mixed $value The value to be converted.
     * @return float The float representation of the value.
     */
    public static function toFloat(mixed $value): float
    {
        return is_numeric($value) ? (float) $value : 0.0;
    }

    /**
     * Converts a mixed value to an integer.
     *
     * If the value is numeric (integer, float, or numeric string), it is cast to an integer.
     * If the value is not numeric, it returns 0.
     *
     * @param mixed $value The value to be converted.
     * @return int The integer representation of the value.
     */
    public static function toInt(mixed $value): int
    {
        return is_numeric($value) ? (int) $value : 0;
    }
}
