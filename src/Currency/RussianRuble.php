<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class RussianRuble extends AbstractCurrency
{
    public const FULL_NAME = 'Russian Ruble';
    public const SUBUNIT = 'Kopek';
    public const ISO_CODE = 'RUB';
    public const SYMBOL = 'Ñ€.';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
