<?php

namespace DevPro\TestTask\ArrayPart\MirrorLetters;

const ALPHABET = [
    'a', 'b', 'c', 'd',
    'e', 'f', 'g', 'h',
    'i', 'j', 'k', 'l',
    'm', 'n', 'o', 'p',
    'q', 'r', 's', 't',
    'u', 'v', 'w', 'x',
    'y', 'z',
];

/**
 * 2.4
 *
 * @param string $text
 * @return string
 */
function getTextWithMirrorLetters(string $text): string
{
    $arr = mb_str_split($text);

    $mirror = function ($item) {
        $alphabet = ALPHABET;
        $isUpper = ctype_upper($item);

        if (in_array(mb_strtolower($item), $alphabet)) {
            $index = array_search(mb_strtolower($item), $alphabet);
            $mirrorLetter = $alphabet[count($alphabet) - 1 - $index];

            return $isUpper ? mb_strtoupper($mirrorLetter) : $mirrorLetter;
        }

        return $item;
    };

    $result = array_map($mirror, $arr);

    return implode('', $result);
}
