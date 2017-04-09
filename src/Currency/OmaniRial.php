<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class OmaniRial extends AbstractCurrency
{
    public const FULL_NAME = 'Omani Rial';
    public const SUBUNIT = 'Baisa';
    public const ISO_CODE = 'OMR';
    public const SYMBOL = 'Ø±.Ø¹.';
    
    protected const SUBUNIT_TO_UNIT = 1000;
    protected const SYMBOL_FIRST = true;
}
