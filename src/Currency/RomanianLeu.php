<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class RomanianLeu extends AbstractCurrency
{
    public const FULL_NAME = 'Romanian Leu';
    public const SUBUNIT = 'Ban';
    public const ISO_CODE = 'RON';
    public const SYMBOL = 'L';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
