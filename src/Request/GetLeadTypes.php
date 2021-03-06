<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\GetLeadTypes as GetLeadTypesModel;
use Easir\SDK\Response\GetLeadTypes as GetLeadTypesResponse;

class GetLeadTypes extends Request
{
    /**
     * @var string
     */
    protected $url = '/lead-types?page=%d&per_page=%d&q=%s&include_bundled=%d&enable_escalation=%d';
    /**
     * @var string
     */
    public $method = 'GET';
    /**
     * @var string
     */
    public $responseClass = GetLeadTypesResponse::class;
    /**
     * @var string
     */
    protected $modelClass = GetLeadTypesModel::class;

    /**
     * @throws RequestException
     * @return string
     */
    public function getUrl()
    {
        $this->checkModel();

        return sprintf(parent::getUrl(),
            (int)$this->model->page,
            (int)$this->model->perPage,
            urlencode((string)$this->model->searchTerm),
            (int)$this->model->include_bundled,
            (int)$this->model->enable_escalation
        );
    }
}
