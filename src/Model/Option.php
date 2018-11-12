<?php

namespace Easir\SDK\Model;

use Easir\SDK\Model;

abstract class Option extends Model
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $value;

    /**
     * @param int $id
     * @param string $value
     * @return self
     */
    public static function create($id, $value) {
        return new static(['id' => $id, 'value' => $value]);
    }
}
