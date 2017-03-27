<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class LatvianLats extends AbstractCurrency
{
    public const FULL_NAME = 'Latvian Lats';
    public const SUBUNIT = 'SantÄ«ms';
    public const ISO_CODE = 'LVL';
    public const SYMBOL = 'Ls';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
