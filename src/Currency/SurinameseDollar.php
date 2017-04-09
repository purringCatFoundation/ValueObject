<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class SurinameseDollar extends AbstractCurrency
{
    public const FULL_NAME = 'Surinamese Dollar';
    public const SUBUNIT = 'Cent';
    public const ISO_CODE = 'SRD';
    public const SYMBOL = '$';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
