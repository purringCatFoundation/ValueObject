<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class Euro extends AbstractCurrency
{
    public const FULL_NAME = 'Euro';
    public const SUBUNIT = 'Cent';
    public const ISO_CODE = 'EUR';
    public const SYMBOL = 'â‚¬';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
