<?php

declare(strict_types = 1);

namespace PCF\ValueObject\Currency;

class ArgentinePeso extends AbstractCurrency
{

    /**
     * AbstractCurrency constructor.
     *
     * @param float $quality
     */
    public function __construct($quality)
    {
        parent::__construct($quality);
        $this->alphabeticCode = 'ARS';
        $this->numericCode = '32';
    }
}
