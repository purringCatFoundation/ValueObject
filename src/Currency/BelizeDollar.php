<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class BelizeDollar extends AbstractCurrency
{
    public const FULL_NAME = 'Belize Dollar';
    public const SUBUNIT = 'Cent';
    public const ISO_CODE = 'BZD';
    public const SYMBOL = '$';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
