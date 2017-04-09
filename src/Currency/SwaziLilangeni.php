<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class SwaziLilangeni extends AbstractCurrency
{
    public const FULL_NAME = 'Swazi Lilangeni';
    public const SUBUNIT = 'Cent';
    public const ISO_CODE = 'SZL';
    public const SYMBOL = 'L';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
