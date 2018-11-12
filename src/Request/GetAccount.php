<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Model\Account;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\GetById;

class GetAccount extends Request
{
    /**
     * @var string
     */
    protected $url = '/accounts/%s';
    /**
     * @var string
     */
    public $method = 'GET';
    /**
     * @var string
     */
    public $responseClass = Account::class;
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

        return sprintf(parent::getUrl(), urlencode((string)$this->model->id));
    }
}
