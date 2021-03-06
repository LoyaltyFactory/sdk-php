<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

class Search extends Model
{
    /**
     * @var string
     */
    public $searchTerm = '';
    /**
     * @var int
     */
    public $page = 1;
    /**
     * @var int
     */
    public $perPage = 15;
}
