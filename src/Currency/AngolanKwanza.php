<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class AngolanKwanza extends AbstractCurrency
{
    public const FULL_NAME = 'Angolan Kwanza';
    public const SUBUNIT = 'CÃªntimo';
    public const ISO_CODE = 'AOA';
    public const SYMBOL = 'Kz';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
