<?php

declare(strict_types = 1);

namespace PCF\ValueObjectCurrency;

class GibraltarPound extends AbstracCurrency
{

    /**
     * AbstractCurrency constructor.
     *
     * @param float $quality
     */
    public function __construct($quality)
    {
        parent::__construct($quality);
        $this->alphabeticCode = 'GIP';
        $this->numericCode = '292';
    }
}
