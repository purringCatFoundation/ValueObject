<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class GeorgianLari extends AbstractCurrency
{
    public const FULL_NAME = 'Georgian Lari';
    public const SUBUNIT = 'Tetri';
    public const ISO_CODE = 'GEL';
    public const SYMBOL = 'áƒš';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
