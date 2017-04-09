<?php

declare(strict_types=1);

namespace PCF\ValueObject\Temperature;

use PCF\ValueObject\ValueObjectInterface;

abstract class AbstractTemperature implements ValueObjectInterface
{
    public const ABSOLUTE_ZERO = null;

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
     * AbstractDistance constructor.
     * @param float $quality
     */
    public function __construct($quality)
    {
        if (null === (float) static::ABSOLUTE_ZERO) {
            throw new \UnexpectedValueException('Constant Absolute Zero not set');
        }

        $this->validateQuality($quality);

        $this->quality = (float) $quality;
    }

    protected function validateQuality($quality)
    {
        if (false === is_numeric($quality)) {
            throw new \InvalidArgumentException('Quality expect to be a number');
        }

        if ($quality < static::ABSOLUTE_ZERO) {
            throw new \InvalidArgumentException('Quality expect to be grater or equal 0');
        }
    }

    public function isEqualTo(ValueObjectInterface $compare): bool
    {
        $className = static::class;
        if (false === $compare instanceof $className) {
            $errorMsg = 'you are able to compare only to same distanceType as ' . $className . 'use Comparator instead';
            throw new \InvalidArgumentException($errorMsg);
        }

        return $compare->getQuality() == $this->getQuality();
    }

    /**
     * {@inheritdoc}
     */
    public function __toString(): string
    {
        return $this->getQuality() .'°'. $this->getUnit();
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
