<?php

namespace DevPro\TestTask\OOPPart\Zoo;

abstract class MammalAbstract extends AnimalAbstract implements AnimalInterface
{
    public function __construct($name, $age)
    {
        parent::__construct($name, $age, 'Mammal');
    }
}
