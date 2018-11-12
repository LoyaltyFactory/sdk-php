<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\UpdateConsent as UpdateConsentRequestModel;
use Easir\SDK\Model\Consent;

class UpdateConsent extends Request
{
    /**
     * @var string
     */
    protected $url = '/accounts/%s/contacts/%s/consent';
    /**
     * @var string
     */
    public $method = 'PUT';
    /**
     * @var string
     */
    public $responseClass = Consent::class;
    /**
     * @var string
     */
    protected $modelClass = UpdateConsentRequestModel::class;

    /**
     * @throws RequestException
     * @return string
     */
    public function getUrl()
    {
        $this->checkModel();

        return sprintf(
            parent::getUrl(),
            urlencode((string)$this->model->account_id),
            urlencode((string)$this->model->contact_id)
        );
    }
}
