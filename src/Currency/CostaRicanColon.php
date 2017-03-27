<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class CostaRicanColon extends AbstractCurrency
{
    public const FULL_NAME = 'Costa Rican Colon';
    public const SUBUNIT = 'CÃ©ntimo';
    public const ISO_CODE = 'CRC';
    public const SYMBOL = 'â‚¡';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
