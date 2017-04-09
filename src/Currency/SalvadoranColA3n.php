<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class SalvadoranColA3n extends AbstractCurrency
{
    public const FULL_NAME = 'Salvadoran ColÃ³n';
    public const SUBUNIT = 'Centavo';
    public const ISO_CODE = 'SVC';
    public const SYMBOL = 'â‚¡';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
