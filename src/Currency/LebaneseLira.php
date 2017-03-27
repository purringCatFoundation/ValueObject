<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class LebaneseLira extends AbstractCurrency
{
    public const FULL_NAME = 'Lebanese Lira';
    public const SUBUNIT = 'Piastre';
    public const ISO_CODE = 'LBP';
    public const SYMBOL = 'Ù„.Ù„';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
