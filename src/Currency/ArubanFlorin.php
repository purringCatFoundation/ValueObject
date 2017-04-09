<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class ArubanFlorin extends AbstractCurrency
{
    public const FULL_NAME = 'Aruban Florin';
    public const SUBUNIT = 'Cent';
    public const ISO_CODE = 'AWG';
    public const SYMBOL = 'Æ’';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
