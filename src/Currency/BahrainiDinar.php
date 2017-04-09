<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class BahrainiDinar extends AbstractCurrency
{
    public const FULL_NAME = 'Bahraini Dinar';
    public const SUBUNIT = 'Fils';
    public const ISO_CODE = 'BHD';
    public const SYMBOL = 'Ø¨.Ø¯';
    
    protected const SUBUNIT_TO_UNIT = 1000;
    protected const SYMBOL_FIRST = true;
}
