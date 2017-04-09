<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class EritreanNakfa extends AbstractCurrency
{
    public const FULL_NAME = 'Eritrean Nakfa';
    public const SUBUNIT = 'Cent';
    public const ISO_CODE = 'ERN';
    public const SYMBOL = 'Nfk';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
