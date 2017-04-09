<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class VanuatuVatu extends AbstractCurrency
{
    public const FULL_NAME = 'Vanuatu Vatu';
    public const SUBUNIT = '';
    public const ISO_CODE = 'VUV';
    public const SYMBOL = 'Vt';
    
    protected const SUBUNIT_TO_UNIT = 1;
    protected const SYMBOL_FIRST = true;
}
