<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class ZambianKwacha extends AbstractCurrency
{
    public const FULL_NAME = 'Zambian Kwacha';
    public const SUBUNIT = 'Ngwee';
    public const ISO_CODE = 'ZMK';
    public const SYMBOL = 'ZK';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
