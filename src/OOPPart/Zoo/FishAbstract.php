<?php

namespace DevPro\TestTask\OOPPart\Zoo;

abstract class FishAbstract extends AnimalAbstract implements AnimalInterface
{
    public function __construct($name, $age)
    {
        parent::__construct($name, $age, 'Fish');
    }
}
