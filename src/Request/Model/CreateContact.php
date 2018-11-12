<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Model\CustomField;
use Easir\SDK\Model\FixedField;
use Easir\SDK\Request\Model;

class CreateContact extends Model
{
    protected $collections = [
        'fixed_fields' => 'fixed_field',
        'custom_fields' => 'custom_field'
    ];
    /**
     * @var int
     */
    public $user_id;
    /**
     * @var int
     */
    public $team_id;
    /**
     * @var string
     */
    public $account_id;
    /**
     * @var FixedField[]
     */
    public $fixed_fields;
    /**
     * @var CustomField[]
     */
    public $custom_fields;
}
