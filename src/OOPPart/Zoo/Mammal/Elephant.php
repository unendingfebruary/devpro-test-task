<?php

namespace DevPro\TestTask\OOPPart\Zoo\Mammal;

use DevPro\TestTask\OOPPart\Zoo\MammalAbstract;

class Elephant extends MammalAbstract
{
    public function getShortDescription(): string
    {
        return 'Elephants are the largest land animals on Earth and are known for their
        intelligence, empathy, and strong social bonds. They live in family groups
        called herds and are found in various habitats across Africa and Asia. Elephants
        are important ecosystem engineers, playing a vital role in shaping and
        maintaining their habitats. They are herbivores and feed on a variety of vegetation,
        consuming up to 300 pounds of food per day. Unfortunately, elephants are also
        threatened by habitat loss, poaching for their ivory tusks, and human-elephant conflicts.';
    }
}
