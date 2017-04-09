<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class IcelandicKrA3na extends AbstractCurrency
{
    public const FULL_NAME = 'Icelandic KrÃ³na';
    public const SUBUNIT = 'Eyrir';
    public const ISO_CODE = 'ISK';
    public const SYMBOL = 'kr';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
