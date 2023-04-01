<?php

namespace DevPro\TestTask\OOPPart\Zoo\Mammal;

use DevPro\TestTask\OOPPart\Zoo\MammalAbstract;

class Dog extends MammalAbstract
{
    public function getShortDescription(): string
    {
        return 'Dogs have been selectively bred over centuries for various behaviors,
        sensory capabilities, and physical attributes. Dogs are known for their
        loyalty, trainability, and ability to form strong bonds with their owners.
        They are often used for working purposes such as hunting, herding, and
        providing assistance to those with disabilities. There are hundreds of
        different breeds of dogs, each with their own unique characteristics and traits.';
    }
}
