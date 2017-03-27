<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class CaymanIslandsDollar extends AbstractCurrency
{
    public const FULL_NAME = 'Cayman Islands Dollar';
    public const SUBUNIT = 'Cent';
    public const ISO_CODE = 'KYD';
    public const SYMBOL = '$';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
