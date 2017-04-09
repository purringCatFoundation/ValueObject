<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class BulgarianLev extends AbstractCurrency
{
    public const FULL_NAME = 'Bulgarian Lev';
    public const SUBUNIT = 'Stotinka';
    public const ISO_CODE = 'BGN';
    public const SYMBOL = 'Ð»Ð²';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
