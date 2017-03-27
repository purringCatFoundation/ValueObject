<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class VietnameseAEang extends AbstractCurrency
{
    public const FULL_NAME = 'Vietnamese Äá»“ng';
    public const SUBUNIT = 'HÃ o';
    public const ISO_CODE = 'VND';
    public const SYMBOL = 'â‚«';
    
    protected const SUBUNIT_TO_UNIT = 10;
    protected const SYMBOL_FIRST = true;
}
