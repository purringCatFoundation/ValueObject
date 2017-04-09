<?php

declare(strict_types = 1);

namespace PCF\ValueObject\Mass;

class Gram extends AbstractMass
{
    public function __construct($quality)
    {
        parent::__construct($quality);
        $this->unit = 'g';
    }
}
