<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class GuineanFranc extends AbstractCurrency
{
    public const FULL_NAME = 'Guinean Franc';
    public const SUBUNIT = 'Centime';
    public const ISO_CODE = 'GNF';
    public const SYMBOL = 'Fr';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
