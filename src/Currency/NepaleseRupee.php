<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class NepaleseRupee extends AbstractCurrency
{
    public const FULL_NAME = 'Nepalese Rupee';
    public const SUBUNIT = 'Paisa';
    public const ISO_CODE = 'NPR';
    public const SYMBOL = 'â‚¨';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
