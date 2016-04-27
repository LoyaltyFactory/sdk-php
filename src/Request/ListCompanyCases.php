<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\ListCompanyCases as ListCompanyCasesModel;
use Easir\SDK\Response\ListCompanyCases as ListCompanyCasesResponse;

/**
 * Request class for listing company accounts
 *
 * @package Easir\SDK\Request
 */
class ListCompanyCases extends Request
{
    protected $url = '/cases?q=%s';
    public $method = 'GET';
    public $requiresAuth = true;
    public $responseClass = ListCompanyCasesResponse::class;
    protected $modelClass = ListCompanyCasesModel::class;

    public function getUrl()
    {
        if (is_null($this->model)) {
            throw new RequestException("We can't make a request without a RequestModel", RequestException::MISSING_MODEL);
        } else {
            return sprintf(parent::getUrl(),
                urlencode((string)$this->model->searchTerm)
            );
        }
    }
}