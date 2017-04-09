<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class PapuaNewGuineanKina extends AbstractCurrency
{
    public const FULL_NAME = 'Papua New Guinean Kina';
    public const SUBUNIT = 'Toea';
    public const ISO_CODE = 'PGK';
    public const SYMBOL = 'K';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
