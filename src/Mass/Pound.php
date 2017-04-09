<?php

declare(strict_types = 1);

namespace PCF\ValueObject\Mass;

class Pound extends AbstractMass
{
    public function __construct($quality)
    {
        parent::__construct($quality);
        $this->unit = 'lb';
    }
}
