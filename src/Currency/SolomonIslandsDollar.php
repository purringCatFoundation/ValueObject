<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class SolomonIslandsDollar extends AbstractCurrency
{
    public const FULL_NAME = 'Solomon Islands Dollar';
    public const SUBUNIT = 'Cent';
    public const ISO_CODE = 'SBD';
    public const SYMBOL = '$';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
