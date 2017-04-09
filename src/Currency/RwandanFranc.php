<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class RwandanFranc extends AbstractCurrency
{
    public const FULL_NAME = 'Rwandan Franc';
    public const SUBUNIT = 'Centime';
    public const ISO_CODE = 'RWF';
    public const SYMBOL = 'Fr';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
