<?php

declare(strict_types = 1);

namespace PCF\ValueObject\Distance;

class Meter extends AbstractDistance
{
    /**
     * Meter constructor.
     * @param float $quality
     */
    public function __construct($quality)
    {
        parent::__construct($quality);
        $this->unit = 'm';
    }
}
