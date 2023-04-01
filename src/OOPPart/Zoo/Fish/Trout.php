<?php

namespace DevPro\TestTask\OOPPart\Zoo\Fish;

use DevPro\TestTask\OOPPart\Zoo\FishAbstract;

class Trout extends FishAbstract
{
    public function getShortDescription(): string
    {
        return 'Trout is a type of freshwater fish that belongs to the Salmonidae
        family. There are many different species of trout found in rivers, lakes,
        and streams around the world, and they are popular among recreational anglers.
        They are characterized by their streamlined, torpedo-shaped body and colorful
        skin, which can range from silver to brown or greenish-blue with speckles.
        Trout are carnivorous and feed on small fish, insects, and crustaceans.
        They are also an important part of the food chain and are preyed upon by
        larger fish, birds, and mammals.';
    }
}
