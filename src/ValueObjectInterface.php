<?php

declare(strict_types=1);

namespace PCF\ValueObject;

interface ValueObjectInterface
{
    /**
     * Two value objects are equal if their values are equal
     * @param ValueObjectInterface $compare
     *
     * @return boolean
     */
    public function isEqualTo(ValueObjectInterface $compare): bool;

    /**
     * Return string representation of value
     *
     * @return string
     */
    public function __toString(): string;
}
