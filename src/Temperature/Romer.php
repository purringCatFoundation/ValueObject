<?php

declare(strict_types=1);

namespace PCF\ValueObject\Temperature;

class Romer extends AbstractTemperature
{
    public const ABSOLUTE_ZERO = '–135.90';

    /**
     * Kelvin constructor.
     *
     * @param float $quality
     */
    public function __construct($quality)
    {
        parent::__construct($quality);

        $this->unit = 'C';
    }
}
