<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class AlbanianLek extends AbstractCurrency
{
    public const FULL_NAME = 'Albanian Lek';
    public const SUBUNIT = 'Qintar';
    public const ISO_CODE = 'ALL';
    public const SYMBOL = 'L';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
