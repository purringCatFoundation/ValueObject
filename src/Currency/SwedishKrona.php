<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class SwedishKrona extends AbstractCurrency
{
    public const FULL_NAME = 'Swedish Krona';
    public const SUBUNIT = 'Ã–re';
    public const ISO_CODE = 'SEK';
    public const SYMBOL = 'kr';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
