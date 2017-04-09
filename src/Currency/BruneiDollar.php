<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class BruneiDollar extends AbstractCurrency
{
    public const FULL_NAME = 'Brunei Dollar';
    public const SUBUNIT = 'Sen';
    public const ISO_CODE = 'BND';
    public const SYMBOL = '$';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
