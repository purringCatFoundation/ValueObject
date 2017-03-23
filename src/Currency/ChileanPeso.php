<?php

declare(strict_types = 1);

namespace PCF\ValueObjectCurrency;

class ChileanPeso extends AbstracCurrency
{

    /**
     * AbstractCurrency constructor.
     *
     * @param float $quality
     */
    public function __construct($quality)
    {
        parent::__construct($quality);
        $this->alphabeticCode = 'CLP';
        $this->numericCode = '152';
    }
}
