<?php

namespace DevPro\TestTask\Tests;

use PHPUnit\Framework\TestCase;

use function DevPro\TestTask\ArrayPart\Reverse\reverseString;

class ReverseTest extends TestCase
{
    public function testReverseString()
    {
        $str = 'Hello, World!';

        $expected = '!dlroW ,olleH';
        $actual = reverseString($str);

        $this->assertEquals($expected, $actual);
    }
}
