<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class SlovakKoruna extends AbstractCurrency
{
    public const FULL_NAME = 'Slovak Koruna';
    public const SUBUNIT = 'Halier';
    public const ISO_CODE = 'SKK';
    public const SYMBOL = 'Sk';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
