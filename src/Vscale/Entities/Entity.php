<?php

namespace Vscale\Entities;

use Vscale\Exceptions\PropertyNotExistException;

class Entity
{
    public function __construct(array $params)
    {
        foreach ($params as $key => $param) {
            if (property_exists($this, $key)) {
                $this->$key = $param;
            }
        }
    }

    public function __get($name): mixed
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        }

        throw new PropertyNotExistException();
    }

    public function toArray(): array
    {
        $vars = get_object_vars($this);
        $array = [];
        foreach ( $vars as $key => $value ) {
            $array [ltrim ( $key, '_' )] = $value instanceof Entity
                ? $value->toArray()
                : $value;
        }

        return $array;
    }

    public function toJson(): string
    {
        return json_encode($this->toArray());
    }
}