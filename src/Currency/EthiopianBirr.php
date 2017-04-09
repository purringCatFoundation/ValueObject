<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class EthiopianBirr extends AbstractCurrency
{
    public const FULL_NAME = 'Ethiopian Birr';
    public const SUBUNIT = 'Santim';
    public const ISO_CODE = 'ETB';
    public const SYMBOL = '';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
