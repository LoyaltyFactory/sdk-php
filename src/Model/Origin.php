<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class Origin extends Response
{
    /**
     * @var string
     */
    public $type;
    /**
     * @var User
     */
    public $user;
    /**
     * @var Team
     */
    public $team;
}
