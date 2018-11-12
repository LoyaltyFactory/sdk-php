<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

class AddLeadFile extends Model
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var resource
     */
    public $contents;
    /**
     * @var string
     */
    public $filename;
}
