<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class ArmenianDram extends AbstractCurrency
{
    public const FULL_NAME = 'Armenian Dram';
    public const SUBUNIT = 'Luma';
    public const ISO_CODE = 'AMD';
    public const SYMBOL = 'Õ¤Ö€.';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
