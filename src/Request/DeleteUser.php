<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\DeleteUser as DeleteUserRequestModel;

class DeleteUser extends Request
{
    /**
     * @var string
     */
    protected $url = '/companies/%d/users/%d%s';
    /**
     * @var string
     */
    public $method = 'DELETE';
    /**
     * @var string
     */
    protected $modelClass = DeleteUserRequestModel::class;

    /**
     * @throws RequestException
     * @return string
     */
    public function getUrl()
    {
        $this->checkModel();

        $suffix = '';
        if (!empty($this->model->assignTo)) {
            $suffix = sprintf('?assign_to=%d', (int)$this->model->assignTo);
        }

        return sprintf(parent::getUrl(), (int)$this->model->companyId, (int)$this->model->id, $suffix);
    }
}
