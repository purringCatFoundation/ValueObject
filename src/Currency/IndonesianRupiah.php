<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class IndonesianRupiah extends AbstractCurrency
{
    public const FULL_NAME = 'Indonesian Rupiah';
    public const SUBUNIT = 'Sen';
    public const ISO_CODE = 'IDR';
    public const SYMBOL = 'Rp';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
