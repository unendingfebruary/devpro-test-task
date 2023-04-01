<?php

namespace DevPro\TestTask\Tests;

use DevPro\TestTask\OOPPart\Zoo\Fish\Trout;
use DevPro\TestTask\OOPPart\Zoo\Insect\Butterfly;
use DevPro\TestTask\OOPPart\Zoo\Mammal\Dog;
use DevPro\TestTask\OOPPart\Zoo\Mammal\Lion;
use PHPUnit\Framework\TestCase;

class AnimalTest extends TestCase
{
    public function testGetName()
    {
        $animal = new Butterfly('Monarch', 0.5);
        $this->assertEquals('Monarch', $animal->getName());
    }

    public function testGetAge()
    {
        $animal = new Dog('Zeus', 5);
        $this->assertEquals(5, $animal->getAge());
    }

    public function testGetSpecies()
    {
        $animal = new Trout('Rainbow', 1);
        $this->assertEquals('Fish', $animal->getSpecies());
    }

    public function testGetShortDescription()
    {
        $animal1 = new Butterfly('Kiwi', 0.5);
        $animal2 = new Dog('Zeus', 5);
        $animal3 = new Lion('Simba', 8);
        $animal4 = new Trout('Rainbow', 1);

        $this->assertNotEmpty($animal1->getShortDescription());
        $this->assertNotEmpty($animal2->getShortDescription());
        $this->assertNotEmpty($animal3->getShortDescription());
        $this->assertNotEmpty($animal4->getShortDescription());
    }
}
