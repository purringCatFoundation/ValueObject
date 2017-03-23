<?php

declare(strict_types = 1);

namespace PCF\ValueObject\Currency;

class MexicanPeso extends AbstractCurrency
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
