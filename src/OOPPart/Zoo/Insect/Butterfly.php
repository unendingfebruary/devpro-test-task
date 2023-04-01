<?php

namespace DevPro\TestTask\OOPPart\Zoo\Insect;

use DevPro\TestTask\OOPPart\Zoo\InsectAbstract;

class Butterfly extends InsectAbstract
{
    public function getShortDescription(): string
    {
        return 'Butterflies are colorful, flying insects with two pairs of wings.
        They have a long, thin body and feed on the nectar of flowers. Butterflies
        go through a life cycle of egg, larva (caterpillar), pupa (chrysalis), and
        adult, and are known for their intricate patterns and wing shapes';
    }
}
