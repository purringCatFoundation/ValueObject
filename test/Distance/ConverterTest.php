<?php

declare(strict_types = 1);

namespace PCF\ValueObjectTest;

use PCF\ValueObject\Distance\Converter;
use Mockery;
use PCF\ValueObject\Distance\Meter;
use PCF\ValueObject\Distance\Foot;
use PCF\ValueObject\Distance\Feet;
use PHPUnit\Framework\TestCase;

class ConverterTest extends TestCase
{

    /**
     * @dataProvider convertProvider
     *
     * @covers PCF\ValueObject\Distance\Converter
     * @covers PCF\ValueObject\Distance\AbstractDistance::__construct
     * @covers PCF\ValueObject\Distance\Foot::__construct
     * @covers PCF\ValueObject\Distance\Meter::__construct
     * @covers PCF\ValueObject\Distance\AbstractDistance::getQuality

     * @param $class
     * @param $unit
     * @param $expectedClass
     * @param $expected
     */
    public function testConvert($class, $unit, $expectedClass, $expected)
    {
        $input = $this->getMockBuilder($class)
            ->disableOriginalConstructor()
            ->setMethods(['getQuality', 'getUnit'])
            ->getMock();
        $input->method('getQuality')->willReturn(100);
        $input->method('getUnit')->willReturn($unit);

        $result = Converter::convert($input, $expectedClass);
        $this->assertInstanceOf($expectedClass, $result);
        $this->assertEquals($expected, $result->getQuality());
    }

    /**
     * @dataProvider convertProvider
     * @covers PCF\ValueObject\Distance\Converter
     *
     * @param $class
     * @param $unit
     * @param $expectedClass
     * @param $expected
     */
    public function testNoRuleSet($class, $unit, $expectedClass, $expected)
    {
        $unit = 'some silly unit';
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('there is no conversion ruleset for input object');
        $this->testConvert($class, $unit, $expectedClass, $expected);
    }

    /**
     * @dataProvider convertProvider
     * @covers PCF\ValueObject\Distance\Converter
     *
     * @param $class
     * @param $unit
     * @param $expectedClass
     * @param $expected
     */
    public function testNoRule($class, $unit, $expectedClass, $expected)
    {
        $expectedClass = 'some non existing class';
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('no rule to convert from');
        $this->testConvert($class, $unit, $expectedClass, $expected);
    }

    public function convertProvider()
    {
        $testcase1 = [
            'class' => Meter::class,
            'unit' => 'm',
            'expectedClass' => Foot::class,
            'expected' => 328.08399
        ];

        $testcase2 = $testcase1;
        $testcase2['expectedClass'] = Feet::class;

        $testcase3 = [
            'class' => Foot::class,
            'unit' => 'ft',
            'expectedClass' => Meter::class,
            'expected' => 30.48
        ];

        $testcase4 = $testcase3;
        $testcase4['class'] = Feet::class;
        return [$testcase1, $testcase2, $testcase3, $testcase4];
    }
}