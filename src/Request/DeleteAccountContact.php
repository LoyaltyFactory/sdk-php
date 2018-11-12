<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\GetContact as DeleteContactRequestModel;

class DeleteAccountContact extends Request
{
    /**
     * @var string
     */
    protected $url = '/accounts/%s/contacts/%s';
    /**
     * @var string
     */
    public $method = 'DELETE';
    /**
     * @var string
     */
    protected $modelClass = DeleteContactRequestModel::class;

    /**
     * @throws RequestException
     * @return string
     */
    public function getUrl()
    {
        $this->checkModel();

        return sprintf(parent::getUrl(),
            urlencode((string)$this->model->account_id),
            urlencode((string)$this->model->contact_id)
        );
    }
}
