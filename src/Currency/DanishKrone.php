<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class DanishKrone extends AbstractCurrency
{
    public const FULL_NAME = 'Danish Krone';
    public const SUBUNIT = 'Ã˜re';
    public const ISO_CODE = 'DKK';
    public const SYMBOL = 'kr';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
