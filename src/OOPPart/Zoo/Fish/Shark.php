<?php

namespace DevPro\TestTask\OOPPart\Zoo\Fish;

use DevPro\TestTask\OOPPart\Zoo\FishAbstract;

class Shark extends FishAbstract
{
    public function getShortDescription(): string
    {
        return 'Sharks are a group of large, cartilaginous fish with long, streamlined
        bodies and five to seven gill slits on the sides of their heads. They are found
        in all the world\'s oceans, from the Arctic to the Antarctic, and are well-known
        apex predators. Sharks come in a variety of sizes, from the tiny dwarf
        lanternshark to the massive whale shark, which can grow up to 40 feet in length.
        They have a highly developed sense of smell, electroreception, and excellent vision,
        which they use to locate prey. Despite their fearsome reputation, most shark species
        are not a threat to humans and play an important role in maintaining the balance of
        marine ecosystems.';
    }
}
