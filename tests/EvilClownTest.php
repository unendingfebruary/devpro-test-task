<?php

namespace DevPro\TestTask\Tests;

use PHPUnit\Framework\TestCase;

use function DevPro\TestTask\ArrayPart\EvilClown\normalizeEmoticons;

class EvilClownTest extends TestCase
{
    public function testNormalizeEmoticons()
    {
        $text = "Hello!! ))) How are you? I'm sick ;(((((";

        $expected = "Hello!! ) How are you? I'm sick ;(";
        $actual = normalizeEmoticons($text);

        $this->assertEquals($expected, $actual);
    }
}
