<?php

declare(strict_types=1);

namespace PCF\ValueObject\Distance;

use PCF\ValueObject\ValueObjectInterface;

abstract class AbstractDistance implements ValueObjectInterface
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
     * AbstractDistance constructor.
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
        $className = get_called_class();
        if (false === $compare instanceof $className) {
            $errorMsg = 'you are able to compare only to same distanceType as ' . $className . 'use Comparator instead';
            throw new \InvalidArgumentException($errorMsg);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function __toString(): string
    {
        return $this->getQuality() . $this->getUnit();
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