<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class SouthAfricanRand extends AbstractCurrency
{
    public const FULL_NAME = 'South African Rand';
    public const SUBUNIT = 'Cent';
    public const ISO_CODE = 'ZAR';
    public const SYMBOL = 'R';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
