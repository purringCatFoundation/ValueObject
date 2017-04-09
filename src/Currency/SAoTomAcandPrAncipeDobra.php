<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class SAoTomAcandPrAncipeDobra extends AbstractCurrency
{
    public const FULL_NAME = 'SÃ£o TomÃ© and PrÃ­ncipe Dobra';
    public const SUBUNIT = 'CÃªntimo';
    public const ISO_CODE = 'STD';
    public const SYMBOL = 'Db';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
