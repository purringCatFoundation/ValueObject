<?php

declare(strict_types = 1);

namespace PCF\ValueObject\Currency;

class SDR extends AbstractCurrency
{

    /**
     * AbstractCurrency constructor.
     *
     * @param float $quality
     */
    public function __construct($quality)
    {
        parent::__construct($quality);
        $this->alphabeticCode = 'XDR';
        $this->numericCode = '960';
    }
}
