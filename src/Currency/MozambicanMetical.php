<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class MozambicanMetical extends AbstractCurrency
{
    public const FULL_NAME = 'Mozambican Metical';
    public const SUBUNIT = 'Centavo';
    public const ISO_CODE = 'MZN';
    public const SYMBOL = 'MTn';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
