<?php

namespace DevPro\TestTask\OOPPart\Zoo\Mammal;

use DevPro\TestTask\OOPPart\Zoo\MammalAbstract;

class Lion extends MammalAbstract
{
    public function getShortDescription(): string
    {
        return 'The lion is a large, carnivorous feline with a muscular, deep-chested body,
        short, rounded head, round ears, and a hairy tuft at the end of its tail. Lions
        are well known for their distinctive manes, which are the most recognizable feature
        of male lions. They are social animals that live in groups called prides and are
        found in grasslands, savannas, and forests across Africa and a small population in
        the Gir Forest of India. Lions are apex predators and hunt mainly at night, preying
        on a variety of animals including antelopes, zebras, and buffalo.';
    }
}
