<?php

namespace DevPro\TestTask\ArrayPart\Reverse;

/**
 * 2.1
 *
 * @param string $str
 * @return string
 */
function reverseString(string $str): string
{
    $revertedString = '';

    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $revertedString .= $str[$i];
    }

    return $revertedString;
}
