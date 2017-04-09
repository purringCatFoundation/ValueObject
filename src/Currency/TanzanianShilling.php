<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class TanzanianShilling extends AbstractCurrency
{
    public const FULL_NAME = 'Tanzanian Shilling';
    public const SUBUNIT = 'Cent';
    public const ISO_CODE = 'TZS';
    public const SYMBOL = 'Sh';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
