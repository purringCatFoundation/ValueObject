<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class BhutaneseNgultrum extends AbstractCurrency
{
    public const FULL_NAME = 'Bhutanese Ngultrum';
    public const SUBUNIT = 'Chertrum';
    public const ISO_CODE = 'BTN';
    public const SYMBOL = '';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
