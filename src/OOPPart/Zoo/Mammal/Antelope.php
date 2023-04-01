<?php

namespace DevPro\TestTask\OOPPart\Zoo\Mammal;

use DevPro\TestTask\OOPPart\Zoo\MammalAbstract;

class Antelope extends MammalAbstract
{
    public function getShortDescription(): string
    {
        return 'Antelopes are known for their slender, graceful bodies, long legs,
        and curved horns, which are found in both males and females of some species.
        Antelopes are social animals and are often found in large herds, feeding on
        grasses, leaves, and other vegetation. They are preyed upon by many
        carnivorous animals, such as lions and hyenas, and their speed and agility
        make them difficult to catch.';
    }
}
