<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class IsraeliNewSheqel extends AbstractCurrency
{
    public const FULL_NAME = 'Israeli New Sheqel';
    public const SUBUNIT = 'Agora';
    public const ISO_CODE = 'ILS';
    public const SYMBOL = 'â‚ª';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
