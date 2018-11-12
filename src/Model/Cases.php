<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class Cases extends Response
{
    /**
     * @var string
     */
    public $id;
    /**
     * @var int
     */
    public $user_id;
    /**
     * @var string
     */
    public $contact_id;
    /**
     * @var string
     */
    public $relations_path_id;
    /**
     * @var bool
     */
    public $notify_user;
    /**
     * @var string
     */
    public $created_at;
    /**
     * @var string
     */
    public $updated_at;
}
