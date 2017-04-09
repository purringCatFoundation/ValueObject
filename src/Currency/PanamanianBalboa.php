<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class PanamanianBalboa extends AbstractCurrency
{
    public const FULL_NAME = 'Panamanian Balboa';
    public const SUBUNIT = 'CentÃ©simo';
    public const ISO_CODE = 'PAB';
    public const SYMBOL = 'B/.';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
