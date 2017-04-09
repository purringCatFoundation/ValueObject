<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class HongKongDollar extends AbstractCurrency
{
    public const FULL_NAME = 'Hong Kong Dollar';
    public const SUBUNIT = 'Ho';
    public const ISO_CODE = 'HKD';
    public const SYMBOL = '$';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
