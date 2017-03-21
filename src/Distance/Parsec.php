<?php

declare(strict_types = 1);

namespace PCF\ValueObject\Distance;

class Parsec extends AbstractDistance
{
    public function __construct($quality)
    {
        parent::__construct($quality);
        $this->unit= 'pc';
    }
}
