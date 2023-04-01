<?php

namespace DevPro\TestTask\OOPPart\Zoo;

abstract class InsectAbstract extends AnimalAbstract implements AnimalInterface
{
    public function __construct($name, $age)
    {
        parent::__construct($name, $age, 'Insect');
    }
}
