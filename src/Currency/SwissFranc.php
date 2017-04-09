<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class SwissFranc extends AbstractCurrency
{
    public const FULL_NAME = 'Swiss Franc';
    public const SUBUNIT = 'Rappen';
    public const ISO_CODE = 'CHF';
    public const SYMBOL = 'Fr';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
