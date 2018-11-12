<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

class CreateCase extends Model
{
    /**
     * @var int
     */
    public $user_id;
    /**
     * @var int
     */
    public $team_id;
    /**
     * @var int
     */
    public $contact_id;
    /**
     * @var string
     */
    public $relations_path_id;
    /**
     * @var bool
     */
    public $notify_user = false;
}
