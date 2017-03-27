<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class BritishPound extends AbstractCurrency
{
    public const FULL_NAME = 'British Pound';
    public const SUBUNIT = 'Penny';
    public const ISO_CODE = 'GBP';
    public const SYMBOL = 'Â£';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
