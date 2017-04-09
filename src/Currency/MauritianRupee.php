<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class MauritianRupee extends AbstractCurrency
{
    public const FULL_NAME = 'Mauritian Rupee';
    public const SUBUNIT = 'Cent';
    public const ISO_CODE = 'MUR';
    public const SYMBOL = 'â‚¨';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
