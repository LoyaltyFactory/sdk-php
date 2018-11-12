<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\GetContact as GetContactModel;
use Easir\SDK\Model\Contact;

class GetAccountContact extends Request
{
    /**
     * @var string
     */
    protected $url = '/accounts/%s/contacts/%s';
    /**
     * @var string
     */
    public $method = 'GET';
    /**
     * @var string
     */
    public $responseClass = Contact::class;
    /**
     * @var string
     */
    protected $modelClass = GetContactModel::class;

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
