<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

class UpdateConsent extends Model
{
    /**
     * @var string
     */
    public $account_id;
    /**
     * @var string
     */
    public $contact_id;
    /**
     * @var string
     */
    public $type;
    /**
     * @var bool|null
     */
    public $status;
}
