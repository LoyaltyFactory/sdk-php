<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\AttachTeamToGroup as AttachTeamToGroupRequestModel;

class AttachTeamToGroup extends Request
{
    /**
     * @var string
     */
    protected $url = '/groups/%d/teams/%d';
    /**
     * @var string
     */
    public $method = 'PUT';
    /**
     * @var string
     */
    protected $modelClass = AttachTeamToGroupRequestModel::class;

    /**
     * @throws RequestException
     * @return string
     */
    public function getUrl()
    {
        $this->checkModel();

        return sprintf(parent::getUrl(), (int)$this->model->group_id, (int)$this->model->team_id);
    }
}
