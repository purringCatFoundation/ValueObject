<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class SudanesePound extends AbstractCurrency
{
    public const FULL_NAME = 'Sudanese Pound';
    public const SUBUNIT = 'Piastre';
    public const ISO_CODE = 'SDG';
    public const SYMBOL = 'Â£';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
