<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

class DeleteUser extends Model
{
    /**
     * @var int
     */
    public $companyId;
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $assignTo;
}
