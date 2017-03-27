<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

class UkrainianHryvnia extends AbstractCurrency
{
    public const FULL_NAME = 'Ukrainian Hryvnia';
    public const SUBUNIT = 'Kopiyka';
    public const ISO_CODE = 'UAH';
    public const SYMBOL = 'â‚´';
    
    protected const SUBUNIT_TO_UNIT = 100;
    protected const SYMBOL_FIRST = false;
}
