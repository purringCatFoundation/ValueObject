<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class MoldovanLeu extends AbstractCurrency
{
    public const FULL_NAME = 'Moldovan Leu';
    public const SUBUNIT = 'Ban';
    public const ISO_CODE = 'MDL';
    public const SYMBOL = 'L';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
