<?php

declare(strict_types=1);

namespace PCF\ValueObject\Currency;

use PCF\ValueObject\ValueObjectInterface;

abstract class AbstractCurrency implements ValueObjectInterface
{
    
    public const UNIT = '';
    public const SUBUNIT = '';
    public const ISO_CODE = '';
    public const ISO_NUM_CODE = null;
    public const SYMBOL = '';
    
    protected const SUBUNIT_TO_UNIT = 1;
    
    /**
     * @var integer
     */
    protected $subUnitQuality;
    
    /**
     * AbstractCurrency constructor.
     * @param null $quality
     * @param null $subUnitQuality
     */
    public function __construct($quality = null, $subUnitQuality = null)
    {
        if (false === empty($subUnitQuality)) {
            $this->subUnitQuality = $subUnitQuality;
        } elseif (false === empty($quality)) {
            $this->subUnitQuality = $quality * static::SUBUNIT_TO_UNIT;
        } else {
            throw new \InvalidArgumentException('quality or subunit quality required');
        }
    }
    
    /**
     * @inheritdoc
     */
    public function isEqualTo(ValueObjectInterface $compare): bool
    {
        if (!$compare instanceof AbstractCurrency || !$compare instanceof static::class) {
            throw new \InvalidArgumentException('You may compare only same currency');
        }
        return $compare->getQuality() == $this->getQuality();
    }
    
    /**
     * @inheritdoc
     */
    public function __toString(): string
    {
        return ($this->subUnitQuality / static::SUBUNIT_TO_UNIT) . ' ' . static::SYMBOL;
    }
    
    /**
     * @return string
     */
    public function getSubUnitQuality()
    {
        return $this->subUnitQuality . ' ' . static::SUBUNIT;
    }
}