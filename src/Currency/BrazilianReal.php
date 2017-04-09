<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class BrazilianReal extends AbstractCurrency
{
    public const FULL_NAME = 'Brazilian Real';
    public const SUBUNIT = 'Centavo';
    public const ISO_CODE = 'BRL';
    public const SYMBOL = 'R$ ';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
