<?php

namespace DevPro\TestTask\OOPPart\Zoo\Mammal;

use DevPro\TestTask\OOPPart\Zoo\MammalAbstract;

class Cougar extends MammalAbstract
{
    public function getShortDescription(): string
    {
        return 'Cougar has a slender body, a round head, and a long tail,
        and is known for its strength, agility, and stealth. Cougars are
        solitary and territorial animals, and are active mainly at night,
        feeding on a variety of prey including deer, elk, and smaller mammals.
        They are considered apex predators and play an important role in
        maintaining ecological balance.';
    }
}
