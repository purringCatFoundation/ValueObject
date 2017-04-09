<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class HaitianGourde extends AbstractCurrency
{
    public const FULL_NAME = 'Haitian Gourde';
    public const SUBUNIT = 'Centime';
    public const ISO_CODE = 'HTG';
    public const SYMBOL = 'G';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
