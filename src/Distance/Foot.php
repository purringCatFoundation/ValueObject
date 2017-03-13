<?php

declare(strict_types = 1);

namespace PCF\ValueObject\Distance;

class Foot extends AbstractDistance
{
    /**
     * Foot constructor.
     * @param float $quality
     */
    public function __construct($quality)
    {
        parent::__construct($quality);
        $this->unit = 'ft';
    }
}
