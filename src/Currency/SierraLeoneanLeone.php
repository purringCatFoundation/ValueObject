<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class SierraLeoneanLeone extends AbstractCurrency
{
    public const FULL_NAME = 'Sierra Leonean Leone';
    public const SUBUNIT = 'Cent';
    public const ISO_CODE = 'SLL';
    public const SYMBOL = 'Le';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
