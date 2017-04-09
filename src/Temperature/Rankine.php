<?php

declare(strict_types=1);

namespace PCF\ValueObject\Temperature;

class Rankine extends AbstractTemperature
{
    public const ABSOLUTE_ZERO = 0;

    /**
     * Kelvin constructor.
     *
     * @param float $quality
     */
    public function __construct($quality)
    {
        parent::__construct($quality);

        $this->unit = 'R';
    }
}
