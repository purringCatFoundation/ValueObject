<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class PeruvianNuevoSol extends AbstractCurrency
{
    public const FULL_NAME = 'Peruvian Nuevo Sol';
    public const SUBUNIT = 'CÃ©ntimo';
    public const ISO_CODE = 'PEN';
    public const SYMBOL = 'S/.';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
