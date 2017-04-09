<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class MauritanianOuguiya extends AbstractCurrency
{
    public const FULL_NAME = 'Mauritanian Ouguiya';
    public const SUBUNIT = 'Khoums';
    public const ISO_CODE = 'MRO';
    public const SYMBOL = 'UM';
    
    protected const SUBUNIT_TO_UNIT = 5;
    protected const SYMBOL_FIRST = false;
}
