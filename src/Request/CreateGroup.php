<?php

namespace Easir\SDK\Request;

use Easir\SDK\Request;
use Easir\SDK\Request\Model\CreateGroup as CreateGroupRequestModel;
use Easir\SDK\Model\Group;

class CreateGroup extends Request
{
    /**
     * @var string
     */
    protected $url = '/groups';
    /**
     * @var string
     */
    public $method = 'POST';
    /**
     * @var string
     */
    public $responseClass = Group::class;
    /**
     * @var string
     */
    protected $modelClass = CreateGroupRequestModel::class;
}
