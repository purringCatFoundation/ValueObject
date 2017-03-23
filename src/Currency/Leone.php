<?php

declare(strict_types = 1);

namespace PCF\ValueObjectCurrency;

class Leone extends AbstracCurrency
{

    /**
     * AbstractCurrency constructor.
     *
     * @param float $quality
     */
    public function __construct($quality)
    {
        parent::__construct($quality);
        $this->alphabeticCode = 'SLL';
        $this->numericCode = '694';
    }
}
