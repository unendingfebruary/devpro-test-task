<?php

namespace DevPro\TestTask\Tests;

use PHPUnit\Framework\TestCase;
use DevPro\TestTask\OOPPart\Collection\ObjectCollection;

class ObjectCollectionTest extends TestCase
{
    protected function setUp(): void
    {
        $this->collection = new ObjectCollection();
    }

    public function testAddObject()
    {
        $object = new \stdClass();
        $this->collection->add($object, 'data');

        $this->assertTrue($this->collection->check($object));
    }

    public function testRemoveObject()
    {
        $object = new \stdClass();

        $this->collection->add($object, 'data');
        $this->collection->remove($object);

        $this->assertFalse($this->collection->check($object));
    }

    public function testCurrentObject()
    {
        $object = new \stdClass();
        $object2 = new \DateTime();

        $this->collection->add($object, 'data');
        $this->collection->add($object2, 'data');

        $this->assertEquals($object2, $this->collection->current());
    }

    public function testObjectList()
    {
        $object = new \stdClass();
        $object2 = new \DateTime();
        $object3 = new \Exception();

        $this->collection->add($object, 'data');
        $this->collection->add($object2, 'data');
        $this->collection->add($object3, 'data');

        $expected = [$object, $object2, $object3];
        $actual = $this->collection->getObjectList();

        $this->assertEquals($expected, $actual);
    }

    public function testRemoveAllObjects()
    {
        $object = new \DateTime();
        $object2 = new \Exception();

        $this->collection->add($object, 'data');
        $this->collection->add($object2, 'data');

        ObjectCollection::removeAll($this->collection);

        $this->assertEmpty($this->collection->getObjectList());
    }
}
