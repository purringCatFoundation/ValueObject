<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class IndianRupee extends AbstractCurrency
{
    public const FULL_NAME = 'Indian Rupee';
    public const SUBUNIT = 'Paisa';
    public const ISO_CODE = 'INR';
    public const SYMBOL = 'â‚¨';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
