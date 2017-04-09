<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class MoroccanDirham extends AbstractCurrency
{
    public const FULL_NAME = 'Moroccan Dirham';
    public const SUBUNIT = 'Centime';
    public const ISO_CODE = 'MAD';
    public const SYMBOL = 'Ø¯.Ù….';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
