<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class TajikistaniSomoni extends AbstractCurrency
{
    public const FULL_NAME = 'Tajikistani Somoni';
    public const SUBUNIT = 'Diram';
    public const ISO_CODE = 'TJS';
    public const SYMBOL = 'Ð…Ðœ';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
