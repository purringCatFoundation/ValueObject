<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class NamibianDollar extends AbstractCurrency
{
    public const FULL_NAME = 'Namibian Dollar';
    public const SUBUNIT = 'Cent';
    public const ISO_CODE = 'NAD';
    public const SYMBOL = '$';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
