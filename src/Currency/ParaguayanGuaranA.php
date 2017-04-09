<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class ParaguayanGuaranA extends AbstractCurrency
{
    public const FULL_NAME = 'Paraguayan GuaranÃ­';
    public const SUBUNIT = 'CÃ©ntimo';
    public const ISO_CODE = 'PYG';
    public const SYMBOL = 'â‚²';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
