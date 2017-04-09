<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class SamoanTala extends AbstractCurrency
{
    public const FULL_NAME = 'Samoan Tala';
    public const SUBUNIT = 'Sene';
    public const ISO_CODE = 'WST';
    public const SYMBOL = 'T';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
