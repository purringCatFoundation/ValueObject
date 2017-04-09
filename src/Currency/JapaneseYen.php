<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class JapaneseYen extends AbstractCurrency
{
    public const FULL_NAME = 'Japanese Yen';
    public const SUBUNIT = 'Sen';
    public const ISO_CODE = 'JPY';
    public const SYMBOL = 'Â¥';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
