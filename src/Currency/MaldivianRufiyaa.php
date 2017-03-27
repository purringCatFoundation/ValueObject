<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class MaldivianRufiyaa extends AbstractCurrency
{
    public const FULL_NAME = 'Maldivian Rufiyaa';
    public const SUBUNIT = 'Laari';
    public const ISO_CODE = 'MVR';
    public const SYMBOL = 'Þƒ.';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
