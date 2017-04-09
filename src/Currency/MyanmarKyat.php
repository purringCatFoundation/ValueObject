<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class MyanmarKyat extends AbstractCurrency
{
    public const FULL_NAME = 'Myanmar Kyat';
    public const SUBUNIT = 'Pya';
    public const ISO_CODE = 'MMK';
    public const SYMBOL = 'K';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
