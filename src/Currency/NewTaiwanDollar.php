<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class NewTaiwanDollar extends AbstractCurrency
{
    public const FULL_NAME = 'New Taiwan Dollar';
    public const SUBUNIT = 'Cent';
    public const ISO_CODE = 'TWD';
    public const SYMBOL = '$';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
