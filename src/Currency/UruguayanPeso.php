<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class UruguayanPeso extends AbstractCurrency
{
    public const FULL_NAME = 'Uruguayan Peso';
    public const SUBUNIT = 'CentÃ©simo';
    public const ISO_CODE = 'UYU';
    public const SYMBOL = '$';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
