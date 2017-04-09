<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class LesothoLoti extends AbstractCurrency
{
    public const FULL_NAME = 'Lesotho Loti';
    public const SUBUNIT = 'Sente';
    public const ISO_CODE = 'LSL';
    public const SYMBOL = 'L';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
