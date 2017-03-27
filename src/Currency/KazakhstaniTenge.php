<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class KazakhstaniTenge extends AbstractCurrency
{
    public const FULL_NAME = 'Kazakhstani Tenge';
    public const SUBUNIT = 'Tiyn';
    public const ISO_CODE = 'KZT';
    public const SYMBOL = 'ã€’';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
