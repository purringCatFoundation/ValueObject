<?php

declare(strict_types = 1);

namespace PCF\ValueObject\Currency;

class Riel extends AbstractCurrency
{

    /**
     * AbstractCurrency constructor.
     *
     * @param float $quality
     */
    public function __construct($quality)
    {
        parent::__construct($quality);
        $this->alphabeticCode = 'KHR';
        $this->numericCode = '116';
    }
}
