<?php

declare(strict_types = 1);

namespace PCF\ValueObject\Distance;
class Converter
{
    /**
     * @var array
     */
    protected static $rules = [
        'm' => [
            Feet::class => 'meterToFeet',
            Foot::class => 'meterToFeet'
        ],
        'ft' => [
            Meter::class => 'feetToMeter'
        ]
    ];

    /**
     * @param AbstractDistance $obj
     * @param $expectedClass
     *
     * @return mixed
     *
     * @uses meterToFeet
     * @uses feetToMeter
     */
    public static function convert(AbstractDistance $obj, $expectedClass): AbstractDistance
    {
        if (empty(self::$rules[$obj->getUnit()]) || false === is_array(self::$rules[$obj->getUnit()])) {
            throw new \InvalidArgumentException('there is no conversion ruleset for input object');
        }

        if (empty(self::$rules[$obj->getUnit()][$expectedClass])) {
            throw new \InvalidArgumentException('no rule to convert from ' . get_class($obj) . ' to '. $expectedClass);
        }

        $convertFunction = self::$rules[$obj->getUnit()][$expectedClass];
        $newQuality = self::$convertFunction($obj->getQuality());

        return new $expectedClass($newQuality);
    }

    /**
     * @param $meters
     * @return float
     */
    private static function meterToFeet($meters): float
    {
        return $meters * 3.2808399;
    }

    /**
     * @param $feets
     * @return float
     */
    private static function feetToMeter($feets): float
    {
        return $feets * 0.3048;
    }
}
