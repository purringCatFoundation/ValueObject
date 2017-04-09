<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class IranianRial extends AbstractCurrency
{
    public const FULL_NAME = 'Iranian Rial';
    public const SUBUNIT = 'Dinar';
    public const ISO_CODE = 'IRR';
    public const SYMBOL = 'ï·¼';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
