<?php

namespace PCF\ValueObject;

interface ValueObjectInterface
{
    /**
     * Two value objects are equal if their values are equal
     * @param ValueObjectInterface $compare
     * @return boolean
     */
    public function isEqualTo(ValueObjectInterface $compare);

    /**
     * Return string representation of value
     * @return string
     */
    public function __toString();
}
