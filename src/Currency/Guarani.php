<?php

declare(strict_types = 1);

namespace PCF\ValueObject\Currency;

class Guarani extends AbstractCurrency
{

    /**
     * AbstractCurrency constructor.
     *
     * @param float $quality
     */
    public function __construct($quality)
    {
        parent::__construct($quality);
        $this->alphabeticCode = 'PYG';
        $this->numericCode = '600';
    }
}
