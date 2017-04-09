<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class SaudiRiyal extends AbstractCurrency
{
    public const FULL_NAME = 'Saudi Riyal';
    public const SUBUNIT = 'Hallallah';
    public const ISO_CODE = 'SAR';
    public const SYMBOL = 'Ø±.Ø³';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
