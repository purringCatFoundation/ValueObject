<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class SouthKoreanWon extends AbstractCurrency
{
    public const FULL_NAME = 'South Korean Won';
    public const SUBUNIT = 'Jeon';
    public const ISO_CODE = 'KRW';
    public const SYMBOL = 'â‚©';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
