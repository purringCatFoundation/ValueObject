<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class CubanConvertiblePeso extends AbstractCurrency
{
    public const FULL_NAME = 'Cuban Convertible Peso';
    public const SUBUNIT = 'Centavo';
    public const ISO_CODE = 'CUC';
    public const SYMBOL = '$';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
