<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class BahamianDollar extends AbstractCurrency
{
    public const FULL_NAME = 'Bahamian Dollar';
    public const SUBUNIT = 'Cent';
    public const ISO_CODE = 'BSD';
    public const SYMBOL = '$';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
