<?php

namespace DevPro\TestTask\OOPPart\Collection;

class ObjectCollection
{
    private array $storage = [];

    public function add(object $object, mixed $data = null): void
    {
        $hash = $this->getHash($object);

        $this->storage[$hash] = [
            'object' => $object,
            'data' => $data,
        ];
    }

    public function remove(object $object): void
    {
        $hash = $this->getHash($object);

        if (isset($this->storage[$hash])) {
            unset($this->storage[$hash]);
        }
    }

    public function current(): object|null
    {
        $hash = array_key_last($this->storage);

        return $this->storage[$hash]['object'];
    }

    public function getObjectList(): array
    {
        $storage = $this->storage;
        $objects = [];

        foreach ($storage as $item) {
            $objects[] = $item['object'];
        }

        return $objects;
    }

    public function check(object $object): bool
    {
        $hash = $this->getHash($object);

        return isset($this->storage[$hash]);
    }

    public static function removeAll(ObjectCollection $collection): void
    {
        $collection->storage = [];
    }

    private function getHash(object $object): string
    {
        return spl_object_hash($object);
    }
}
