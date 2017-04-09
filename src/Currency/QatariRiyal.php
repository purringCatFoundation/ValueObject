<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class QatariRiyal extends AbstractCurrency
{
    public const FULL_NAME = 'Qatari Riyal';
    public const SUBUNIT = 'Dirham';
    public const ISO_CODE = 'QAR';
    public const SYMBOL = 'Ø±.Ù‚';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
