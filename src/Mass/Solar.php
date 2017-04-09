<?php

declare(strict_types = 1);

namespace PCF\ValueObject\Mass;

class Solar extends AbstractMass
{
    public function __construct($quality)
    {
        parent::__construct($quality);
        $this->unit = 'M☉';
    }
}