<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class TunisianDinar extends AbstractCurrency
{
    public const FULL_NAME = 'Tunisian Dinar';
    public const SUBUNIT = 'Millime';
    public const ISO_CODE = 'TND';
    public const SYMBOL = 'Ø¯.Øª';
    
    protected const SUBUNIT_TO_UNIT = 1000;
    protected const SYMBOL_FIRST = false;
}
