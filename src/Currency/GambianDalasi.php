<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class GambianDalasi extends AbstractCurrency
{
    public const FULL_NAME = 'Gambian Dalasi';
    public const SUBUNIT = 'Butut';
    public const ISO_CODE = 'GMD';
    public const SYMBOL = 'D';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
