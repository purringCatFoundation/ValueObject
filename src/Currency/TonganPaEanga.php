<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class TonganPaEanga extends AbstractCurrency
{
    public const FULL_NAME = 'Tongan PaÊ»anga';
    public const SUBUNIT = 'Seniti';
    public const ISO_CODE = 'TOP';
    public const SYMBOL = 'T$';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
