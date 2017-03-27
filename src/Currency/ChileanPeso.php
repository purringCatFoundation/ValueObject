<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class ChileanPeso extends AbstractCurrency
{
    public const FULL_NAME = 'Chilean Peso';
    public const SUBUNIT = 'Peso';
    public const ISO_CODE = 'CLP';
    public const SYMBOL = '$';
    
    protected const SUBUNIT_TO_UNIT = 1;
    protected const SYMBOL_FIRST = true;
}
