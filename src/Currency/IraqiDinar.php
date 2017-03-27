<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class IraqiDinar extends AbstractCurrency
{
    public const FULL_NAME = 'Iraqi Dinar';
    public const SUBUNIT = 'Fils';
    public const ISO_CODE = 'IQD';
    public const SYMBOL = 'Ø¹.Ø¯';
    
    protected const SUBUNIT_TO_UNIT = 1000;
    protected const SYMBOL_FIRST = false;
}
