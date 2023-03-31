<?php

namespace DevPro\TestTask\ArrayPart\EvilClown;

/**
 * 1.1
 *
 * @param string $text
 * @return string
 */
function normalizeEmoticons(string $text): string
{
    $sourceArray = mb_str_split($text);
    $normalizedArray = [];

    $parentheses = ['(', ')'];

    for ($i = 0; $i < count($sourceArray); $i++) {
        $char = $sourceArray[$i];

        if (in_array($char, $parentheses) && $char === end($normalizedArray)) {
            continue;
        }

        $normalizedArray[] = $char;
    }

    return implode('', $normalizedArray);
}
