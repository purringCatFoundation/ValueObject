<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class CroatianKuna extends AbstractCurrency
{
    public const FULL_NAME = 'Croatian Kuna';
    public const SUBUNIT = 'Lipa';
    public const ISO_CODE = 'HRK';
    public const SYMBOL = 'kn';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
