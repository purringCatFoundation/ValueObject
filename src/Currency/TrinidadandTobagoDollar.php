<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class TrinidadandTobagoDollar extends AbstractCurrency
{
    public const FULL_NAME = 'Trinidad and Tobago Dollar';
    public const SUBUNIT = 'Cent';
    public const ISO_CODE = 'TTD';
    public const SYMBOL = '$';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
