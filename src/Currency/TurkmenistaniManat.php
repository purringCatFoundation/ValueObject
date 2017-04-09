<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class TurkmenistaniManat extends AbstractCurrency
{
    public const FULL_NAME = 'Turkmenistani Manat';
    public const SUBUNIT = 'Tennesi';
    public const ISO_CODE = 'TMM';
    public const SYMBOL = 'm';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
