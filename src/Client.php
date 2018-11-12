<?php

namespace Easir\SDK;

use Easir\SDK\Exception\ClientException;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\JsonResponse;

class Client extends GuzzleClient
{
    public $endpoint;
    public $accessToken;

    /**
     * Client constructor.
     *
     * @param string|null $endpoint
     * @param string|null $accessToken
     */
    public function __construct($endpoint = null, $accessToken = null)
    {
        $this->endpoint = $endpoint;
        $this->accessToken = $accessToken;

        parent::__construct();
    }

    /**
     * Execute request to the EASI'R API
     *
     * @param Request $request
     * @return mixed
     * @throws ClientException
     * @throws \Exception
     */
    public function execute(Request $request)
    {
        $this->validate();

        $request->validate();

        $options = array();
        if (!is_null($this->accessToken)) {
            $options['headers']['Authorization'] = "Bearer " . $this->accessToken;
        }

        if (true === $request->requiresAuth && !isset($options['headers']['Authorization'])) {
            throw new ClientException("Request requires auth", ClientException::MISSING_AUTH);
        }

        $options['json'] = $request->model;
        $url = rtrim($this->endpoint, '/') . $request->getUrl();
        $options = array_merge($options, $request->options);

        if (isset($options['multipart'])) {
            unset($options['json']);
        }

        try {
            $clientResponse = $this->request($request->method, $url, $options);
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                $clientResponse = $e->getResponse();
            } else {
                throw $e;
            }
        } catch (\Exception $e) {
            throw $e;
        }

        if (isset($request->model->noHandling) && $request->model->noHandling) {
            return [
                'body' => json_decode($clientResponse->getBody()->getContents()),
                'status' => $clientResponse->getStatusCode(),
                'headers' => $clientResponse->getHeaders(),
            ];
        } else {
            $responseClass = $request->responseClass;
            if (!is_null($responseClass)) {
                $response = $responseClass::createFromClientResponse($clientResponse);
            } else {
                // We don't have a response object so lets just show the raw json response
                $response = json_decode($clientResponse->getBody()->getContents());
            }
        }

        return $response;
    }

    /**
     * Checks for errors and throws an exception if any are found
     *
     * @throws ClientException
     */
    private function validate()
    {
        if (is_null($this->endpoint)) {
            throw new ClientException("endpoint is required", ClientException::MISSING_ENDPOINT);
        }
    }
}