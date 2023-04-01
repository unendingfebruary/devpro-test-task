<?php

namespace DevPro\TestTask\ArrayPart\UniqueWords;

use function DevPro\TestTask\ArrayPart\WordsInText\getWords;

/**
 * 2.5
 *
 * @param string $text
 * @return array
 */
function getUniqueWords(string $text): array
{
    $wordsArray = getWords($text);
    $uniqueWords = [];

    foreach ($wordsArray as $word => $count) {
        if ($count === 1) {
            $uniqueWords[] = $word;
        }
    }

    return $uniqueWords;
}
