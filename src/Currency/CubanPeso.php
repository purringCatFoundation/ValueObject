<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class CubanPeso extends AbstractCurrency
{
    public const FULL_NAME = 'Cuban Peso';
    public const SUBUNIT = 'Centavo';
    public const ISO_CODE = 'CUP';
    public const SYMBOL = '$';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
