<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Model\User;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\GetCompanyUser as GetCompanyUserModel;

class GetCompanyUser extends Request
{
    /**
     * @var string
     */
    protected $url = '/companies/%d/users/%d';
    /**
     * @var string
     */
    public $method = 'GET';
    /**
     * @var string
     */
    public $responseClass = User::class;
    /**
     * @var string
     */
    protected $modelClass = GetCompanyUserModel::class;

    /**
     * @throws RequestException
     * @return string
     */
    public function getUrl()
    {
        $this->checkModel();

        return sprintf(parent::getUrl(), (int)$this->model->companyId, (int)$this->model->id);
    }
}
