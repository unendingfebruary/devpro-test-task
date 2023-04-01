<?php

namespace DevPro\TestTask\Tests;

use PHPUnit\Framework\TestCase;

use function DevPro\TestTask\ArrayPart\MirrorLetters\getTextWithMirrorLetters;

class MirrorLettersTest extends TestCase
{
    public function testMirrorLetters()
    {
        $str = 'Nice to meet you!';

        $expected = 'Mrxv gl nvvg blf!';
        $actual = getTextWithMirrorLetters($str);

        $this->assertEquals($expected, $actual);
    }
}
