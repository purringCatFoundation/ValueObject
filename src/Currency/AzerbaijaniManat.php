<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class AzerbaijaniManat extends AbstractCurrency
{
    public const FULL_NAME = 'Azerbaijani Manat';
    public const SUBUNIT = 'QÉ™pik';
    public const ISO_CODE = 'AZN';
    public const SYMBOL = '';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
