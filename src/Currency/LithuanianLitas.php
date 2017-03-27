<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class LithuanianLitas extends AbstractCurrency
{
    public const FULL_NAME = 'Lithuanian Litas';
    public const SUBUNIT = 'Centas';
    public const ISO_CODE = 'LTL';
    public const SYMBOL = 'Lt';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
