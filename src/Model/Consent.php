<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class Consent extends Response
{
    /**
     * @var string
     */
    public $type;
    /**
     * @var bool|null
     */
    public $status;
    /**
     * @var string
     */
    public $updated_at;
    /**
     * @var int
     */
    public $user_id;
    /**
     * @var string
     */
    public $campaign_id;
    /**
     * @var string
     */
    public $contact_id;
    /**
     * @var string
     */
    public $source;
    /**
     * @var string
     */
    public $contact_ip;
    /**
     * @var string
     */
    public $contact_user_agent;
    /**
     * @var string
     */
    public $created_at;
    /**
     * @var Origin
     */
    public $origin;
}
