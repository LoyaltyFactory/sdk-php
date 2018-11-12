<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\UpdateUser as UpdateUserRequestModel;
use Easir\SDK\Model\User;

class UpdateUser extends Request
{
    /**
     * @var string
     */
    protected $url = '/companies/%d/users/%d';
    /**
     * @var string
     */
    public $method = 'PUT';
    /**
     * @var string
     */
    public $responseClass = User::class;
    /**
     * @var string
     */
    protected $modelClass = UpdateUserRequestModel::class;

    /**
     * @throws RequestException
     * @return string
     */
    public function getUrl()
    {
        $this->checkModel();

        return sprintf(parent::getUrl(), (int)$this->model->company_id, (int)$this->model->user_id);
    }
}
