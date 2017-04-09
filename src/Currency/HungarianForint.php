<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class HungarianForint extends AbstractCurrency
{
    public const FULL_NAME = 'Hungarian Forint';
    public const SUBUNIT = 'FillÃ©r';
    public const ISO_CODE = 'HUF';
    public const SYMBOL = 'Ft';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
