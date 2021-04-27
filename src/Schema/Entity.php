<?php

namespace Kiriunin\TinkoffBusinessApi\Schema;

use ReflectionClass;
use ReflectionProperty;

abstract class Entity implements Arrayable
{
    public function toArray(): array
    {
        return $this->fetchObjectProperties(new ReflectionClass($this));
    }

    private function fetchObjectProperties(ReflectionClass $class): array
    {
        $result = [];

        foreach ($class->getProperties() as $property) {
            $this->fetchObjectProperty($result, $property);
        }

        return $result;
    }

    private function fetchObjectProperty(array &$result, ReflectionProperty $property): void
    {
        $property->setAccessible(true);

        $value = $property->getValue($this);

        if ($value || (is_array($value) && count($value))) {
            $this->fillValueByType($result, $property->getName(), $value);
        }

        $property->setAccessible(false);
    }

    private function fillValueByType(array &$result, string $name, mixed $value): void
    {
        if ($value instanceof Arrayable) {
            $result[$name] = $value->toArray();
        } elseif (is_array($value)) {
            foreach ($value as $index => $item) {
                if ($item instanceof Arrayable) {
                    $result[$name][$index] = $item->toArray();
                } else {
                    $result[$name][$index] = $item();
                }
            }
        } else {
            $result[$name] = $value;
        }
    }
}
