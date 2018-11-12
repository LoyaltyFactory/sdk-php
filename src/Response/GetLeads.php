<?php

namespace Easir\SDK\Response;

use Easir\SDK\Model\Lead;
use Easir\SDK\Model\Pagination;
use Easir\SDK\Response;

class GetLeads extends Response
{
    /**
     * @var array
     */
    protected $collections = ['data' => 'lead'];
    /**
     * @var Lead[]
     */
    public $data;
    /**
     * @var Pagination
     */
    public $pagination;
}
