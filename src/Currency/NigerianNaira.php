<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class NigerianNaira extends AbstractCurrency
{
    public const FULL_NAME = 'Nigerian Naira';
    public const SUBUNIT = 'Kobo';
    public const ISO_CODE = 'NGN';
    public const SYMBOL = 'â‚¦';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
