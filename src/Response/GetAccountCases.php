<?php

namespace Easir\SDK\Response;

use Easir\SDK\Model\CaseObject;
use Easir\SDK\Model\Pagination;
use Easir\SDK\Model\Statuses;
use Easir\SDK\Response;

class GetAccountCases extends Response
{
    /**
     * @var array
     */
    protected $collections = ['data' => 'case_object'];
    /**
     * @var CaseObject[]
     */
    public $data;
    /**
     * @var Pagination
     */
    public $pagination;
    /**
     * @var Statuses
     */
    public $statuses;
}
