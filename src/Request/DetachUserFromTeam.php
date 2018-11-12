<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\AttachUserToTeam as AttachUserToTeamRequestModel;

class DetachUserFromTeam extends Request
{
    /**
     * @var string
     */
    protected $url = '/teams/%d/users/%d';
    /**
     * @var string
     */
    public $method = 'DELETE';
    /**
     * @var string
     */
    protected $modelClass = AttachUserToTeamRequestModel::class;

    /**
     * @throws RequestException
     * @return string
     */
    public function getUrl()
    {
        $this->checkModel();

        return sprintf(parent::getUrl(), (int)$this->model->team_id, (int)$this->model->user_id);
    }
}
