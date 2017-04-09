<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class SaintHelenianPound extends AbstractCurrency
{
    public const FULL_NAME = 'Saint Helenian Pound';
    public const SUBUNIT = 'Penny';
    public const ISO_CODE = 'SHP';
    public const SYMBOL = 'Â£';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
