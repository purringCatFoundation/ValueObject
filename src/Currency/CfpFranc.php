<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class CfpFranc extends AbstractCurrency
{
    public const FULL_NAME = 'Cfp Franc';
    public const SUBUNIT = 'Centime';
    public const ISO_CODE = 'XPF';
    public const SYMBOL = 'Fr';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
