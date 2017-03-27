<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class PolishZloty extends AbstractCurrency
{
    public const FULL_NAME = 'Polish ZÅ‚oty';
    public const SUBUNIT = 'Grosz';
    public const ISO_CODE = 'PLN';
    public const SYMBOL = 'zÅ‚';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
