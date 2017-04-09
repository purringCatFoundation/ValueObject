<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class BolivianBoliviano extends AbstractCurrency
{
    public const FULL_NAME = 'Bolivian Boliviano';
    public const SUBUNIT = 'Centavo';
    public const ISO_CODE = 'BOB';
    public const SYMBOL = 'Bs.';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
