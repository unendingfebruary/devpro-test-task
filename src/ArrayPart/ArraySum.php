<?php

namespace DevPro\TestTask\ArrayPart\ArraySum;

/**
 * 2.3
 *
 * @param array $array
 * @return float|int
 */
function getArraySum(array $array): float|int
{
    $sum = 0;

    for ($i = 0; $i < count($array); $i++) {
        if (!is_numeric($array[$i]) && !is_array($array[$i])) {
            continue;
        }

        $sum += is_array($array[$i]) ? getArraySum($array[$i]) : $array[$i];
    }

    return $sum;
}
