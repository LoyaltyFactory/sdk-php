<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Response\ListFields as ListFieldsResponse;

class GetFields extends Request
{
    /**
     * @var string
     */
    protected $url = '/fields';
    /**
     * @var string
     */
    protected $urlSuffix = '';
    /**
     * @var string
     */
    public $method = 'GET';
    /**
     * @var string
     */
    public $responseClass = ListFieldsResponse::class;

    /**
     * @throws RequestException
     * @return string
     */
    public function getUrl()
    {
        return $this->url . $this->urlSuffix;
    }
}
