<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class GibraltarPound extends AbstractCurrency
{
    public const FULL_NAME = 'Gibraltar Pound';
    public const SUBUNIT = 'Penny';
    public const ISO_CODE = 'GIP';
    public const SYMBOL = 'Â£';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
