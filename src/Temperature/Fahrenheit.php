<?php

declare(strict_types=1);

namespace PCF\ValueObject\Temperature;

class Fahrenheit extends AbstractTemperature
{
    public const ABSOLUTE_ZERO = '–459.67';

    /**
     * Kelvin constructor.
     *
     * @param float $quality
     */
    public function __construct($quality)
    {
        parent::__construct($quality);

        $this->unit = 'F';
    }
}
