<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class BosniaAndHerzegovinaConvertibleMark extends AbstractCurrency
{
    public const FULL_NAME = 'Bosnia and Herzegovina Convertible Mark';
    public const SUBUNIT = 'Fening';
    public const ISO_CODE = 'BAM';
    public const SYMBOL = 'ÐšÐœ';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
