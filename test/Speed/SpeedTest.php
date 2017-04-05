<?php

declare(strict_types = 1);

namespace PCF\ValueObjectTest;

use PCF\ValueObject\Distance\Foot;
use PCF\ValueObject\Distance\Meter;
use PCF\ValueObject\Speed\Speed;
use PCF\ValueObject\Time\Second;
use PCF\ValueObject\Time\Svedberg;
use PHPUnit\Framework\TestCase;

class SpeedTest extends TestCase
{
    public function testIsEqual()
    {
        $dist1 = new Meter(5);
        $dist2 = new Meter(7);
        $dist3 = new Meter(10);

        $time1 = new Second(1);
        $time2 = new Second(2);

        $speed1 = new Speed($dist1, $time1);
        $speed2 = new Speed($dist2, $time1);
        $speed3 = new Speed($dist3, $time2);

        $this->assertFalse($speed1->isEqualTo($speed2));
        $this->assertTrue($speed1->isEqualTo($speed3));
    }

    public function testIsEqualWithWrongDataValue()
    {
        $dist1 = new Meter(5);
        $time1 = new Second(1);
        $speed1 = new Speed($dist1, $time1);
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('you are able to compare only speed with same unit');
        $speed1->isEqualTo($dist1);
    }

    /**
     * @dataProvider dataProvider
     *
     * @param $inputDistance
     * @param $inputTime
     * @param $expectedQuality
     * @param $expectedUnit
     * @param $expectedString
     */
    public function testGetters($inputDistance, $inputTime, $expectedQuality, $expectedUnit, $expectedString)
    {
        $obj = new Speed($inputDistance, $inputTime);
        $this->assertSame($expectedQuality, $obj->getQuality());
        $this->assertSame($expectedUnit, $obj->getUnit());
        $this->assertEquals($expectedString, $obj);
    }

    /**
     * @return array
     */
    public function dataProvider()
    {
        $testCase1 = [
            new Foot(3),
            new Second(2),
            1.5,
            'ft/s',
            '1.5 ft/s'
        ];

        $testCase2 = [
            new Meter(1),
            new Svedberg(3),
            0.33333333333333,
            'm/S',
            '0.33333333333333 m/S'
        ];

        return [$testCase1, $testCase2];
    }
}
