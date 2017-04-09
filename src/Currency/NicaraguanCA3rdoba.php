<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class NicaraguanCA3rdoba extends AbstractCurrency
{
    public const FULL_NAME = 'Nicaraguan CÃ³rdoba';
    public const SUBUNIT = 'Centavo';
    public const ISO_CODE = 'NIO';
    public const SYMBOL = 'C$';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
