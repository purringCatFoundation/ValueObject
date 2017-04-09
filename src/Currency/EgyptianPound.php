<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class EgyptianPound extends AbstractCurrency
{
    public const FULL_NAME = 'Egyptian Pound';
    public const SUBUNIT = 'Piastre';
    public const ISO_CODE = 'EGP';
    public const SYMBOL = 'Â£';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
