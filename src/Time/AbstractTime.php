<?php

declare(strict_types = 1);

namespace PCF\ValueObject\Time;

use PCF\ValueObject\ValueObjectInterface;

abstract class AbstractTime implements ValueObjectInterface
{
    /**
     * power of object
     *
     * @var float
     */
    protected $quality;

    /**
     * unit type of object
     *
     * @var string
     */
    protected $unit;

    /**
     * AbstractTime constructor.
     * @param float $quality
     */
    public function __construct($quality)
    {
        if (false === is_numeric($quality)) {
            throw new \InvalidArgumentException('quality expect to be a number');
        }

        $this->quality = (float) $quality;
    }

    public function isEqualTo(ValueObjectInterface $compare): bool
    {
        $className = static::class;
        if (false === $compare instanceof $className) {
            $errorMsg = 'you are able to compare only to same timeType as ' . $className;
            throw new \InvalidArgumentException($errorMsg);
        }

        return $compare->getQuality() == $this->getQuality();
    }

    /**
     * {@inheritdoc}
     */
    public function __toString(): string
    {
        return $this->getQuality() . ' ' . $this->getUnit();
    }

    /**
     * @return float
     */
    public function getQuality(): float
    {
        return $this->quality;
    }

    /**
     * @return string
     */
    public function getUnit(): string
    {
        return $this->unit;
    }
}
