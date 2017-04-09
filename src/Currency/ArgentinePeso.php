<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class ArgentinePeso extends AbstractCurrency
{
    public const FULL_NAME = 'Argentine Peso';
    public const SUBUNIT = 'Centavo';
    public const ISO_CODE = 'ARS';
    public const SYMBOL = '$';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
