<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Model\Signature;
use Easir\SDK\Model\UserType;

class UpdateUser extends CreateUser
{
    /**
     * @var string
     */
    public $user_id;
    /**
     * @var Signature
     */
    public $signature;
    /**
     * @var UserType
     */
    public $user_type;
    /**
     * @var bool
     */
    public $email_notifications;
}
