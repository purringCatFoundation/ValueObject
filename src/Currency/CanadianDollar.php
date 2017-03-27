<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class CanadianDollar extends AbstractCurrency
{
    public const FULL_NAME = 'Canadian Dollar';
    public const SUBUNIT = 'Cent';
    public const ISO_CODE = 'CAD';
    public const SYMBOL = '$';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
