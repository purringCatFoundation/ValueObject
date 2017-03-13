<?php

declare(strict_types = 1);

namespace PCF\ValueObject\Distance;

class Comparator
{
    /**
     * @param AbstractDistance $left
     * @param AbstractDistance $right
     *
     * @return bool
     */
    public static function compare(AbstractDistance $left, AbstractDistance $right): bool
    {
        $tmpDistance = Converter::convert($right, get_class($left));
        return $left->isEqualTo($tmpDistance);
    }
}
