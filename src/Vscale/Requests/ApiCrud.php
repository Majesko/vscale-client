<?php

namespace Vscale\Requests;

abstract class ApiCrud extends BaseRequest
{
    public function index()
    {
        $response = $this->httpClient->get($this->getRequestPath());
        $responseData = \GuzzleHttp\json_decode($response->getBody()->getContents());

        return (new \ResponseFactory($this->domain, $responseData))->getResponse();
    }

    public abstract function create();

    public abstract function show();

    public abstract function update();

    public abstract function delete();
}