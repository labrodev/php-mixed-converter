<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Labrodev\PhpMixedConverter\MixedConverter;

final class MixedConverterTest extends TestCase
{
    /**
     * @return void
     */
    public function testToStringWithScalarValues(): void
    {
        $this->assertSame('123', MixedConverter::toString(123));
        $this->assertSame('12.34', MixedConverter::toString(12.34));
        $this->assertSame('1', MixedConverter::toString(true));
        $this->assertSame('', MixedConverter::toString(false));
        $this->assertSame('Hello', MixedConverter::toString('Hello'));
    }

    /**
     * @return void
     */
    public function testToStringWithNonScalarValues(): void
    {
        $this->assertSame("array (\n)", MixedConverter::toString([]));
        $this->assertSame("(object) array(\n)", MixedConverter::toString(new stdClass()));
    }

    /**
     * @return void
     */
    public function testToFloatWithNumericValues(): void
    {
        $this->assertSame(123.0, MixedConverter::toFloat(123));
        $this->assertSame(12.34, MixedConverter::toFloat(12.34));
        $this->assertSame(123.0, MixedConverter::toFloat('123'));
        $this->assertSame(12.34, MixedConverter::toFloat('12.34'));
    }

    /**
     * @return void
     */
    public function testToFloatWithNonNumericValues(): void
    {
        $this->assertSame(0.0, MixedConverter::toFloat('Hello'));
        $this->assertSame(0.0, MixedConverter::toFloat([]));
        $this->assertSame(0.0, MixedConverter::toFloat(new stdClass()));
    }

    /**
     * @return void
     */
    public function testToIntWithNumericValues(): void
    {
        $this->assertSame(123, MixedConverter::toInt(123));
        $this->assertSame(12, MixedConverter::toInt(12.34));
        $this->assertSame(123, MixedConverter::toInt('123'));
        $this->assertSame(12, MixedConverter::toInt('12.34'));
    }

    /**
     * @return void
     */
    public function testToIntWithNonNumericValues(): void
    {
        $this->assertSame(0, MixedConverter::toInt('Hello'));
        $this->assertSame(0, MixedConverter::toInt([]));
        $this->assertSame(0, MixedConverter::toInt(new stdClass()));
    }
}
