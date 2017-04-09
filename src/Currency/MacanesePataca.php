<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class MacanesePataca extends AbstractCurrency
{
    public const FULL_NAME = 'Macanese Pataca';
    public const SUBUNIT = 'Avo';
    public const ISO_CODE = 'MOP';
    public const SYMBOL = 'P';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
