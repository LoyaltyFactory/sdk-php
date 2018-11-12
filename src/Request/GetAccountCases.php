<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\GetAccountCases as GetAccountCasesModel;
use Easir\SDK\Response\GetAccountCases as GetAccountCasesResponse;

class GetAccountCases extends Request
{
    /**
     * @var string
     */
    protected $url = '/accounts/%s/cases?page=%d&per_page=%d&q=%s&status=%s';
    /**
     * @var string
     */
    public $method = 'GET';
    /**
     * @var string
     */
    public $responseClass = GetAccountCasesResponse::class;
    /**
     * @var string
     */
    protected $modelClass = GetAccountCasesModel::class;

    /**
     * @throws RequestException
     * @return string
     */
    public function getUrl()
    {
        $this->checkModel();

        return sprintf(parent::getUrl(),
            urlencode((string)$this->model->account_id),
            (int)$this->model->page,
            (int)$this->model->perPage,
            urlencode((string)$this->model->searchTerm),
            urlencode((string)$this->model->status)
        );
    }
}
