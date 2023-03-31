<?php

namespace DevPro\TestTask\ArrayPart\LuckyTicket;

/**
 * 2.2
 *
 * @return array
 */
function getLuckyTickets(): array
{
    $luckyTickets = [];

    for ($i = 0; $i <= 999999; $i++) {
        $ticketNumber = str_pad($i, 6, '0', STR_PAD_LEFT);

        $leftPart = mb_substr($ticketNumber, 0, 3);
        $rightPart = mb_substr($ticketNumber, 3);

        $leftPartSum = array_sum(mb_str_split($leftPart));
        $rightPartSum = array_sum(mb_str_split($rightPart));

        if ($leftPartSum === $rightPartSum) {
            $luckyTickets[] = $ticketNumber;
        }
    }

    return $luckyTickets;
}
