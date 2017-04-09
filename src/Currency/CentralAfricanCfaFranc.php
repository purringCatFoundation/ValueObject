<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class CentralAfricanCfaFranc extends AbstractCurrency
{
    public const FULL_NAME = 'Central African Cfa Franc';
    public const SUBUNIT = 'Centime';
    public const ISO_CODE = 'XAF';
    public const SYMBOL = 'Fr';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
