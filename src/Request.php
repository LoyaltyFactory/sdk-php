<?php

namespace Easir\SDK;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request\Model;

/**
 * Request base class.
 *
 * @package Easir\SDK
 */
abstract class Request
{
    protected $url;
    public $method = "GET";
    public $options = array();
    public $requiresAuth = true;
    public $model = null;
    public $responseClass = Response::class;

    protected $modelClass;

    private $allowedMethods = array("GET", "POST", "PUT", "DELETE");

    /**
     * Request constructor.
     *
     * @param Model $model
     * @throws RequestException
     */
    public function __construct(Model $model = null)
    {
        if (!is_null($model) && !is_a($model, $this->modelClass)) {
            throw new RequestException(sprintf("Bad model class (%s) expecting %s", get_class($model), $this->modelClass), RequestException::BAD_MODEL);
        }

        $this->model = $model;
    }

    /**
     * Used to format the request to send to the API
     *
     * @return string
     */
    public function __toString()
    {
        return (string)json_encode($this->model);
    }

    /**
     * Perform validation on the request object
     *
     * @throws RequestException
     */
    public function validate()
    {
        if (!in_array($this->method, $this->allowedMethods)) {
            throw new RequestException("Bad request method", RequestException::BAD_METHOD);
        }
    }


    public function getUrl()
    {
        return $this->url;
    }
}