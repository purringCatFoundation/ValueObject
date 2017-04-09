<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class MalagasyAriary extends AbstractCurrency
{
    public const FULL_NAME = 'Malagasy Ariary';
    public const SUBUNIT = 'Iraimbilanja';
    public const ISO_CODE = 'MGA';
    public const SYMBOL = '';
    
    protected const SUBUNIT_TO_UNIT = 5;
    protected const SYMBOL_FIRST = false;
}
