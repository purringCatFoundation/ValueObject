<?php

declare(strict_types = 1);

namespace PCF\ValueObjectCurrency;

class CongoleseFranc extends AbstracCurrency
{

    /**
     * AbstractCurrency constructor.
     *
     * @param float $quality
     */
    public function __construct($quality)
    {
        parent::__construct($quality);
        $this->alphabeticCode = 'CDF';
        $this->numericCode = '976';
    }
}
