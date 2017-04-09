<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class MalawianKwacha extends AbstractCurrency
{
    public const FULL_NAME = 'Malawian Kwacha';
    public const SUBUNIT = 'Tambala';
    public const ISO_CODE = 'MWK';
    public const SYMBOL = 'MK';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
