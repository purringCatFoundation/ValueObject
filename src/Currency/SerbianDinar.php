<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class SerbianDinar extends AbstractCurrency
{
    public const FULL_NAME = 'Serbian Dinar';
    public const SUBUNIT = 'Para';
    public const ISO_CODE = 'RSD';
    public const SYMBOL = 'din';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
