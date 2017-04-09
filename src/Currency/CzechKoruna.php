<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class CzechKoruna extends AbstractCurrency
{
    public const FULL_NAME = 'Czech Koruna';
    public const SUBUNIT = 'HalÃ©Å™';
    public const ISO_CODE = 'CZK';
    public const SYMBOL = 'KÄ';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
