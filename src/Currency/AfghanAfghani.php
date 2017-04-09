<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class AfghanAfghani extends AbstractCurrency
{
    public const FULL_NAME = 'Afghan Afghani';
    public const SUBUNIT = 'Pul';
    public const ISO_CODE = 'AFN';
    public const SYMBOL = 'Ø‹';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
