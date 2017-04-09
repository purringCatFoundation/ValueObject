<?php

declare(strict_types=1);

namespace PCF\ValueObject\Temperature;

class Reaumur extends AbstractTemperature
{
    public const ABSOLUTE_ZERO = '–218.52';

    /**
     * Kelvin constructor.
     *
     * @param float $quality
     */
    public function __construct($quality)
    {
        parent::__construct($quality);

        $this->unit = 'Re';
    }
}
