<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class FijianDollar extends AbstractCurrency
{
    public const FULL_NAME = 'Fijian Dollar';
    public const SUBUNIT = 'Cent';
    public const ISO_CODE = 'FJD';
    public const SYMBOL = '$';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
