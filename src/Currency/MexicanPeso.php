<?php

declare(strict_types = 1);

namespace PCF\ValueObjectCurrency;

class MexicanPeso extends AbstracCurrency
{

    /**
     * AbstractCurrency constructor.
     *
     * @param float $quality
     */
    public function __construct($quality)
    {
        parent::__construct($quality);
        $this->alphabeticCode = 'MXN';
        $this->numericCode = '484';
    }
}
