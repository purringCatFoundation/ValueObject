<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class LiberianDollar extends AbstractCurrency
{
    public const FULL_NAME = 'Liberian Dollar';
    public const SUBUNIT = 'Cent';
    public const ISO_CODE = 'LRD';
    public const SYMBOL = '$';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
