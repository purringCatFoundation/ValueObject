<?php

declare(strict_types = 1);

namespace PCF\ValueObjectCurrency;

class Tala extends AbstracCurrency
{

    /**
     * AbstractCurrency constructor.
     *
     * @param float $quality
     */
    public function __construct($quality)
    {
        parent::__construct($quality);
        $this->alphabeticCode = 'WST';
        $this->numericCode = '882';
    }
}
