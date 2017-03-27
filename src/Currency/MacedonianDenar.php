<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class MacedonianDenar extends AbstractCurrency
{
    public const FULL_NAME = 'Macedonian Denar';
    public const SUBUNIT = 'Deni';
    public const ISO_CODE = 'MKD';
    public const SYMBOL = 'Ð´ÐµÐ½';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
