<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class BangladeshiTaka extends AbstractCurrency
{
    public const FULL_NAME = 'Bangladeshi Taka';
    public const SUBUNIT = 'Paisa';
    public const ISO_CODE = 'BDT';
    public const SYMBOL = 'à§³';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
