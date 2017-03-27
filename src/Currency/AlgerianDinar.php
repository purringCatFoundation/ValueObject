<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class AlgerianDinar extends AbstractCurrency
{
    public const FULL_NAME = 'Algerian Dinar';
    public const SUBUNIT = 'Centime';
    public const ISO_CODE = 'DZD';
    public const SYMBOL = 'Ø¯.Ø¬';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
