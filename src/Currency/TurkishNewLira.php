<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class TurkishNewLira extends AbstractCurrency
{
    public const FULL_NAME = 'Turkish New Lira';
    public const SUBUNIT = 'New kuruÅŸ';
    public const ISO_CODE = 'TRY';
    public const SYMBOL = 'YTL';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
