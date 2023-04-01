<?php

namespace DevPro\TestTask\Tests;

use PHPUnit\Framework\TestCase;

use function DevPro\TestTask\ArrayPart\ArraySum\getArraySum;

class ArraySumTest extends TestCase
{
    public function testArraySum()
    {
        $arr = [5, '7', 'a', [4, [1, '9']]];
        $arr2 = ['1.2', 17, [11, [0.2, [16, '1.1']]]];

        $expected = 26;
        $expected2 = 46.5;

        $actual = getArraySum($arr);
        $actual2 = getArraySum($arr2);

        $this->assertEquals($expected, $actual);
        $this->assertEquals($expected2, $actual2);
    }
}
