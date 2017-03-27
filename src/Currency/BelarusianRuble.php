<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class BelarusianRuble extends AbstractCurrency
{
    public const FULL_NAME = 'Belarusian Ruble';
    public const SUBUNIT = 'Kapyeyka';
    public const ISO_CODE = 'BYR';
    public const SYMBOL = 'Br';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
