<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class NorthKoreanWon extends AbstractCurrency
{
    public const FULL_NAME = 'North Korean Won';
    public const SUBUNIT = 'ChÅn';
    public const ISO_CODE = 'KPW';
    public const SYMBOL = 'â‚©';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
