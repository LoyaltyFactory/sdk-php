<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\GetById;

class DeleteLeadFile extends Request
{
    /**
     * @var string
     */
    protected $url = '/leads/%s/files/%s';
    /**
     * @var string
     */
    public $method = 'DELETE';
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

        return sprintf(parent::getUrl(), (string)$this->model->id, (string)$this->model->file);
    }
}
