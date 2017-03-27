<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class UgandanShilling extends AbstractCurrency
{
    public const FULL_NAME = 'Ugandan Shilling';
    public const SUBUNIT = 'Cent';
    public const ISO_CODE = 'UGX';
    public const SYMBOL = 'Sh';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
