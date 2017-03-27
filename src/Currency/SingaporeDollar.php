<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class SingaporeDollar extends AbstractCurrency
{
    public const FULL_NAME = 'Singapore Dollar';
    public const SUBUNIT = 'Cent';
    public const ISO_CODE = 'SGD';
    public const SYMBOL = '$';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
