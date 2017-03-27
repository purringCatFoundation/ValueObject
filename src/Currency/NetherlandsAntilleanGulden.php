<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class NetherlandsAntilleanGulden extends AbstractCurrency
{
    public const FULL_NAME = 'Netherlands Antillean Gulden';
    public const SUBUNIT = 'Cent';
    public const ISO_CODE = 'ANG';
    public const SYMBOL = 'Æ’';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
