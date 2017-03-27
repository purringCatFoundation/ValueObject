<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class MalaysianRinggit extends AbstractCurrency
{
    public const FULL_NAME = 'Malaysian Ringgit';
    public const SUBUNIT = 'Sen';
    public const ISO_CODE = 'MYR';
    public const SYMBOL = 'RM';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
