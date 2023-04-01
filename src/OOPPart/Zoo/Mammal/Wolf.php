<?php

namespace DevPro\TestTask\OOPPart\Zoo\Mammal;

use DevPro\TestTask\OOPPart\Zoo\MammalAbstract;

class Wolf extends MammalAbstract
{
    public function getShortDescription(): string
    {
        return 'Wolves are a type of carnivorous mammal that belong to the Canidae family,
        which also includes dogs and foxes. They are known for their distinct howl, which
        they use to communicate with other members of their pack. Wolves are social animals
        and live in groups called packs, led by an alpha male and alpha female. They are
        found in a variety of habitats across North America, Europe, and Asia, and are apex
        predators that hunt a range of prey including deer, elk, and smaller mammals.
        Despite being feared by some humans, wolves play an important role in maintaining
        the balance of their ecosystems.';
    }
}
