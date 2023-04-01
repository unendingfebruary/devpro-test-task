<?php

namespace DevPro\TestTask\OOPPart\Zoo\Mammal;

use DevPro\TestTask\OOPPart\Zoo\MammalAbstract;

class Cat extends MammalAbstract
{
    public function getShortDescription(): string
    {
        return 'Cats have been selectively bred over centuries for their companionship
        and their ability to hunt pests such as rodents. Cats are known for their agility,
        grace, and independence, as well as their distinctive vocalizations and behaviors.
        They are typically active at night and sleep during the day, and are often seen
        grooming themselves with their rough tongues. There are many different breeds
        of cats, each with their own unique characteristics and traits';
    }
}
