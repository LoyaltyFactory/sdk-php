<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\GetById;
use Easir\SDK\Response\GetLeadFiles as GetLeadFilesResponse;

class GetLeadFiles extends Request
{
    /**
     * @var string
     */
    protected $url = '/leads/%s/files';
    /**
     * @var string
     */
    public $method = 'GET';
    /**
     * @var string
     */
    public $responseClass = GetLeadFilesResponse::class;
    /**
     * @var string
     */
    protected $modelClass = GetById::class;

    /**
     * @throws RequestException
     * @return string
     */
    public function getUrl()
    {
        $this->checkModel();

        return sprintf(parent::getUrl(), (string)$this->model->id);
    }
}
