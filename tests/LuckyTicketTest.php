<?php

namespace DevPro\TestTask\Tests;

use PHPUnit\Framework\TestCase;

use function DevPro\TestTask\ArrayPart\LuckyTicket\getLuckyTickets;

class LuckyTicketTest extends TestCase
{
    public function testLuckyTickets()
    {
        $expectedCountOfLuckyTickets = 55252;
        $actual = count(getLuckyTickets());

        $this->assertEquals($expectedCountOfLuckyTickets, $actual);
    }
}
