<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class CambodianRiel extends AbstractCurrency
{
    public const FULL_NAME = 'Cambodian Riel';
    public const SUBUNIT = 'Sen';
    public const ISO_CODE = 'KHR';
    public const SYMBOL = 'áŸ›';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
