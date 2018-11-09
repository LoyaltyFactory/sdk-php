<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Response\ListFields as ListFieldsResponse;
use Easir\SDK\Request\Model\GetField;

class GetFields extends Request
{
    /**
     * @var string
     */
    protected $url = '/fields/';
    /**
     * @var string
     */
    public $method = 'GET';
    /**
     * @var string
     */
    public $responseClass = ListFieldsResponse::class;
    /**
     * @var string
     */
    protected $modelClass = GetField::class;

    /**
     * @throws RequestException
     * @return string
     */
    public function getUrl()
    {
        return $this->url . (string)$this->model->field;
    }
}
