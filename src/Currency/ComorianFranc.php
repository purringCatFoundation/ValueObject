<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class ComorianFranc extends AbstractCurrency
{
    public const FULL_NAME = 'Comorian Franc';
    public const SUBUNIT = 'Centime';
    public const ISO_CODE = 'KMF';
    public const SYMBOL = 'Fr';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
