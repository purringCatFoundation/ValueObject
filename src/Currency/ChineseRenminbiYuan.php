<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class ChineseRenminbiYuan extends AbstractCurrency
{
    public const FULL_NAME = 'Chinese Renminbi Yuan';
    public const SUBUNIT = 'Fen';
    public const ISO_CODE = 'CNY';
    public const SYMBOL = 'Â¥';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
