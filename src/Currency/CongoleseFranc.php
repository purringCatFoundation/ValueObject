<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class CongoleseFranc extends AbstractCurrency
{
    public const FULL_NAME = 'Congolese Franc';
    public const SUBUNIT = 'Centime';
    public const ISO_CODE = 'CDF';
    public const SYMBOL = 'Fr';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
