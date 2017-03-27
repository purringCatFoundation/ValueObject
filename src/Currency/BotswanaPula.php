<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class BotswanaPula extends AbstractCurrency
{
    public const FULL_NAME = 'Botswana Pula';
    public const SUBUNIT = 'Thebe';
    public const ISO_CODE = 'BWP';
    public const SYMBOL = 'P';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = true;
}
