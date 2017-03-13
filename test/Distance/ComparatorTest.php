<?php

declare(strict_types = 1);

namespace PCF\ValueObjectTest;

use PCF\ValueObject\Distance\Comparator;
use PCF\ValueObject\Distance\Feet;
use PCF\ValueObject\Distance\Meter;
use PHPUnit\Framework\TestCase;

class ComparatorTest extends TestCase
{
    /**
     * @covers PCF\ValueObject\Distance\Comparator
     * @covers PCF\ValueObject\Distance\Converter::convert
     * @covers PCF\ValueObject\Distance\AbstractDistance::__construct
     * @covers PCF\ValueObject\Distance\AbstractDistance::getQuality
     * @covers PCF\ValueObject\Distance\AbstractDistance::getUnit
     * @covers PCF\ValueObject\Distance\AbstractDistance::isEqualTo
     * @covers PCF\ValueObject\Distance\Converter::feetToMeter
     * @covers PCF\ValueObject\Distance\Foot::__construct
     * @covers PCF\ValueObject\Distance\Meter::__construct
     */
    public function testCompare()
    {
        $right = new Feet(100);
        $left1 = new Meter(200);
        $left2 = new Meter(30.48);

        $this->assertFalse(Comparator::compare($left1, $right));
        $this->assertTrue(Comparator::compare($left2, $right));
    }
}
