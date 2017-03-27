<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class UnitedArabEmiratesDirham extends AbstractCurrency
{
    public const FULL_NAME = 'United Arab Emirates Dirham';
    public const SUBUNIT = 'Fils';
    public const ISO_CODE = 'AED';
    public const SYMBOL = 'Ø¯.Ø¥';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
