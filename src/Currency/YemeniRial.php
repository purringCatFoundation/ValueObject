<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class YemeniRial extends AbstractCurrency
{
    public const FULL_NAME = 'Yemeni Rial';
    public const SUBUNIT = 'Fils';
    public const ISO_CODE = 'YER';
    public const SYMBOL = 'ï·¼';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
