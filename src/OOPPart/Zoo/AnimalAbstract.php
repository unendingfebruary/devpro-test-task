<?php

namespace DevPro\TestTask\OOPPart\Zoo;

abstract class AnimalAbstract
{
    protected string $name;
    protected int|float $age;
    protected string $species;

    public function __construct($name, $age, $species)
    {
        $this->name = $name;
        $this->age = $age;
        $this->species = $species;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int|float
    {
        return $this->age;
    }

    public function getSpecies(): string
    {
        return $this->species;
    }
}
