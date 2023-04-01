<?php

namespace DevPro\TestTask\ArrayPart\WordsInText;

/**
 * 2.2
 *
 * @param string $text
 * @return array
 */
function getWords(string $text): array
{
    if ($text === '' || $text === ' ') {
        return [];
    }

    $normalizedWordsArray = getNormalizedWordsArray($text);
    $countWordsArray = [];

    foreach ($normalizedWordsArray as $word) {
        if (!isset($countWordsArray[$word])) {
            $countWordsArray[$word] = 1;
        } else {
            $countWordsArray[$word]++;
        }
    }

    return $countWordsArray;
}

function getNormalizedWordsArray(string $text): array
{
    $text = mb_strtolower($text);
    $text = str_replace(PHP_EOL, ' ', $text);

    $array = explode(' ', $text);

    $pattern = '/(?:(\b[\pL\d\'\-]+\b)|\S)/u';
    return preg_replace($pattern, "$1", $array);
}
