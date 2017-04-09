<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class LibyanDinar extends AbstractCurrency
{
    public const FULL_NAME = 'Libyan Dinar';
    public const SUBUNIT = 'Dirham';
    public const ISO_CODE = 'LYD';
    public const SYMBOL = 'Ù„.Ø¯';
    
    protected const SUBUNIT_TO_UNIT = 1000;
    protected const SYMBOL_FIRST = false;
}
