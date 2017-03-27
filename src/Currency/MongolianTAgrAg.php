<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class MongolianTAgrAg extends AbstractCurrency
{
    public const FULL_NAME = 'Mongolian TÃ¶grÃ¶g';
    public const SUBUNIT = 'MÃ¶ngÃ¶';
    public const ISO_CODE = 'MNT';
    public const SYMBOL = 'â‚®';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
