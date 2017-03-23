<?php

declare(strict_types = 1);

namespace PCF\ValueObject\Currency;

class Lek extends AbstractCurrency
{

    /**
     * AbstractCurrency constructor.
     *
     * @param float $quality
     */
    public function __construct($quality)
    {
        parent::__construct($quality);
        $this->alphabeticCode = 'ALL';
        $this->numericCode = '8';
    }
}
