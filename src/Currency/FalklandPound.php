<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class FalklandPound extends AbstractCurrency
{
    public const FULL_NAME = 'Falkland Pound';
    public const SUBUNIT = 'Penny';
    public const ISO_CODE = 'FKP';
    public const SYMBOL = 'Â£';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
