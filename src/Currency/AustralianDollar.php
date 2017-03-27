<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class AustralianDollar extends AbstractCurrency
{
    public const FULL_NAME = 'Australian Dollar';
    public const SUBUNIT = 'Cent';
    public const ISO_CODE = 'AUD';
    public const SYMBOL = '$';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
