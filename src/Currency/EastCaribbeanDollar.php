<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class EastCaribbeanDollar extends AbstractCurrency
{
    public const FULL_NAME = 'East Caribbean Dollar';
    public const SUBUNIT = 'Cent';
    public const ISO_CODE = 'XCD';
    public const SYMBOL = '$';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
