<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\GetLeads as GetLeadsModel;
use Easir\SDK\Response\GetLeads as GetLeadsResponse;

class GetLeads extends Request
{
    /**
     * @var string
     */
    protected $url = '/leads?page=%d&per_page=%d&q=%s&sort_by=%s&sort_direction=%s';
    /**
     * @var string
     */
    public $method = 'GET';
    /**
     * @var string
     */
    public $responseClass = GetLeadsResponse::class;
    /**
     * @var string
     */
    protected $modelClass = GetLeadsModel::class;

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
            urlencode((string)$this->model->sort_by),
            urlencode((string)$this->model->sort_direction)
        );
    }
}
