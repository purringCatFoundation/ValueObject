<?php

declare(strict_types=1);

namespace PCF\ValueObject\Temperature;

class NewtonScale extends AbstractTemperature
{
    public const ABSOLUTE_ZERO = '-90.14';

    /**
     * Kelvin constructor.
     *
     * @param float $quality
     */
    public function __construct($quality)
    {
        parent::__construct($quality);

        $this->unit = 'N';
    }
}
