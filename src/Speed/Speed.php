<?php

declare(strict_types = 1);

namespace PCF\ValueObject\Speed;

use PCF\ValueObject\Distance\AbstractDistance;
use PCF\ValueObject\Time\AbstractTime;
use PCF\ValueObject\ValueObjectInterface;

class Speed implements ValueObjectInterface
{
    /**
     * @var AbstractDistance
     */
    private $distance;
    /**
     * @var AbstractTime
     */
    private $time;
    /**
     * @var float
     */
    private $quality = null;
    /**
     * @var string
     */
    private $unit = null;

    /**
     * Speed constructor.
     * @param AbstractDistance $distance
     * @param AbstractTime $time
     */
    public function __construct(AbstractDistance $distance, AbstractTime $time)
    {
        $this->distance = $distance;
        $this->time = $time;
    }

    /**
     * @inheritdoc
     */
    public function isEqualTo(ValueObjectInterface $compare): bool
    {
        if (!$compare instanceof Speed || $compare->getUnit() != $this->getUnit()) {
            $errorMsg = 'you are able to compare only speed with same unit';
            throw new \InvalidArgumentException($errorMsg);
        }

        return $compare->getQuality() == $this->getQuality();
    }

    /**
     * @inheritdoc
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
        if (empty($this->quantity)) {
            $this->quality = $this->distance->getQuality() / $this->time->getQuality();
        }

        return $this->quality;
    }

    /**
     * @return string
     */
    public function getUnit(): string
    {
        if (empty($this->unit)) {
            $this->unit = $this->distance->getUnit() . '/' . $this->time->getUnit();
        }

        return $this->unit;
    }
}
