<?php

namespace Easir\SDK\Response;

use Easir\SDK\Model\Attachment;
use Easir\SDK\Response;

class GetLeadFiles extends Response
{
    /**
     * @var array
     */
    protected $collections = ['data' => 'attachment'];
    /**
     * @var Attachment[]
     */
    public $data;
}
