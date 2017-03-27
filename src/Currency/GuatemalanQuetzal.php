<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class GuatemalanQuetzal extends AbstractCurrency
{
    public const FULL_NAME = 'Guatemalan Quetzal';
    public const SUBUNIT = 'Centavo';
    public const ISO_CODE = 'GTQ';
    public const SYMBOL = 'Q';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
