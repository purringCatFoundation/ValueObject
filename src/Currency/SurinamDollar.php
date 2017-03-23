<?php

declare(strict_types = 1);

namespace PCF\ValueObjectCurrency;

class SurinamDollar extends AbstracCurrency
{

    /**
     * AbstractCurrency constructor.
     *
     * @param float $quality
     */
    public function __construct($quality)
    {
        parent::__construct($quality);
        $this->alphabeticCode = 'SRD';
        $this->numericCode = '968';
    }
}
