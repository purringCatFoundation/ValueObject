<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class BarbadianDollar extends AbstractCurrency
{
    public const FULL_NAME = 'Barbadian Dollar';
    public const SUBUNIT = 'Cent';
    public const ISO_CODE = 'BBD';
    public const SYMBOL = '$';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
