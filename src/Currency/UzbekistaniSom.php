<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class UzbekistaniSom extends AbstractCurrency
{
    public const FULL_NAME = 'Uzbekistani Som';
    public const SUBUNIT = 'Tiyin';
    public const ISO_CODE = 'UZS';
    public const SYMBOL = '';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
