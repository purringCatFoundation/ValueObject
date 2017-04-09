<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class JordanianDinar extends AbstractCurrency
{
    public const FULL_NAME = 'Jordanian Dinar';
    public const SUBUNIT = 'Piastre';
    public const ISO_CODE = 'JOD';
    public const SYMBOL = 'Ø¯.Ø§';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
