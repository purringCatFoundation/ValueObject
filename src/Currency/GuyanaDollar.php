<?php

declare(strict_types = 1);

namespace PCF\ValueObject\Currency;

class GuyanaDollar extends AbstractCurrency
{

    /**
     * AbstractCurrency constructor.
     *
     * @param float $quality
     */
    public function __construct($quality)
    {
        parent::__construct($quality);
        $this->alphabeticCode = 'GYD';
        $this->numericCode = '328';
    }
}
