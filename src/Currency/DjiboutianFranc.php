<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class DjiboutianFranc extends AbstractCurrency
{
    public const FULL_NAME = 'Djiboutian Franc';
    public const SUBUNIT = 'Centime';
    public const ISO_CODE = 'DJF';
    public const SYMBOL = 'Fr';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
