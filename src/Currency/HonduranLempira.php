<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class HonduranLempira extends AbstractCurrency
{
    public const FULL_NAME = 'Honduran Lempira';
    public const SUBUNIT = 'Centavo';
    public const ISO_CODE = 'HNL';
    public const SYMBOL = 'L';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
