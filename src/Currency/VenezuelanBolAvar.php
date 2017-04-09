<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class VenezuelanBolAvar extends AbstractCurrency
{
    public const FULL_NAME = 'Venezuelan BolÃ­var';
    public const SUBUNIT = 'CÃ©ntimo';
    public const ISO_CODE = 'VEF';
    public const SYMBOL = 'Bs F';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
