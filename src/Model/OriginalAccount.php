<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class OriginalAccount extends Response
{
    /**
     * @var array
     */
    protected $collections = ['fixed_fields' => 'fixed_field', 'custom_fields' => 'custom_field'];
    /**
     * @var FixedField[]
     */
    public $fixed_fields;
    /**
     * @var CustomField[]
     */
    public $custom_fields;
}
