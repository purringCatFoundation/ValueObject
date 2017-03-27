<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class ThaiBaht extends AbstractCurrency
{
    public const FULL_NAME = 'Thai Baht';
    public const SUBUNIT = 'Satang';
    public const ISO_CODE = 'THB';
    public const SYMBOL = 'à¸¿';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
