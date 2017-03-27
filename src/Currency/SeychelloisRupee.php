<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class SeychelloisRupee extends AbstractCurrency
{
    public const FULL_NAME = 'Seychellois Rupee';
    public const SUBUNIT = 'Cent';
    public const ISO_CODE = 'SCR';
    public const SYMBOL = 'â‚¨';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
