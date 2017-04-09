<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class EstonianKroon extends AbstractCurrency
{
    public const FULL_NAME = 'Estonian Kroon';
    public const SUBUNIT = 'Sent';
    public const ISO_CODE = 'EEK';
    public const SYMBOL = 'KR';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
