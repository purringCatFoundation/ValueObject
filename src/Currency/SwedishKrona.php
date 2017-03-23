<?php

declare(strict_types = 1);

namespace PCF\ValueObject\Currency;

class SwedishKrona extends AbstractCurrency
{

    /**
     * AbstractCurrency constructor.
     *
     * @param float $quality
     */
    public function __construct($quality)
    {
        parent::__construct($quality);
        $this->alphabeticCode = 'SEK';
        $this->numericCode = '752';
    }
}
