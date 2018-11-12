<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

class CreateWebhook extends Model
{
    /**
     * @var string
     */
    public $target_url;
    /**
     * @var string
     */
    public $webhook_event;
    /**
     * @var string
     */
    public $scope = 'global';
    /**
     * @var string
     */
    public $verification_token;
}
