<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class KyrgyzstaniSom extends AbstractCurrency
{
    public const FULL_NAME = 'Kyrgyzstani Som';
    public const SUBUNIT = 'Tyiyn';
    public const ISO_CODE = 'KGS';
    public const SYMBOL = '';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
