<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class MexicanPeso extends AbstractCurrency
{
    public const FULL_NAME = 'Mexican Peso';
    public const SUBUNIT = 'Centavo';
    public const ISO_CODE = 'MXN';
    public const SYMBOL = '$';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
