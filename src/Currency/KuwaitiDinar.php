<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class KuwaitiDinar extends AbstractCurrency
{
    public const FULL_NAME = 'Kuwaiti Dinar';
    public const SUBUNIT = 'Fils';
    public const ISO_CODE = 'KWD';
    public const SYMBOL = 'Ø¯.Ùƒ';
    
    protected const SUBUNIT_TO_UNIT = 1000;
    protected const SYMBOL_FIRST = true;
}
