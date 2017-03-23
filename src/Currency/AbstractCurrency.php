<?php

declare(strict_types = 1);

namespace PCF\ValueObject\Currency;

use PCF\ValueObject\ValueObjectInterface;

class AbstractCurrency implements ValueObjectInterface
{
    /**
     * @var string
     */
    private $alphabeticCode;

    /**
     * @var int
     */
    private $numericCode;

    /**
     * @var float
     */
    private $quality;

    /**
     * AbstractCurrency constructor.
     * @param float $quality
     */
    public function __construct($quality)
    {
        $this->quality = $quality;
    }


    /**
     * @return string
     */
    public function getAlphabeticCode(): string
    {
        return $this->alphabeticCode;
    }

    /**
     * @return int
     */
    public function getNumericCode(): int
    {
        return $this->numericCode;
    }

    /**
     * @return float
     */
    public function getQuality(): float
    {
        return $this->quality;
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
        return $this->getQuality() . ' ' . $this->getAlphabeticCode();
    }
}
