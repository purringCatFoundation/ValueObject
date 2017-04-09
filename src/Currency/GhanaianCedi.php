<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class GhanaianCedi extends AbstractCurrency
{
    public const FULL_NAME = 'Ghanaian Cedi';
    public const SUBUNIT = 'Pesewa';
    public const ISO_CODE = 'GHS';
    public const SYMBOL = 'â‚µ';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
