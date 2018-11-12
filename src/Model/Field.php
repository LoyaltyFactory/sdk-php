<?php

namespace Easir\SDK\Model;

use Easir\SDK\Model;

abstract class Field extends Model
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $value;

    /**
     * @param string $name
     * @param string $value
     * @return self
     */
    public static function create($name, $value) {
        return new static(['name' => $name, 'value' => $value]);
    }
}
