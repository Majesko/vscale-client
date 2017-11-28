<?php

namespace Vscale\Requests;

use Vscale\Responses\ResponseFactory;

abstract class ApiCrud extends BaseRequest
{

    protected $only;

    public function index()
    {
        $responseData = $this->makeRequest('GET', $this->getRequestPath());

        $result = array_map(function($item) {
            return (new ResponseFactory($this->domain, $item))->getResponse();
        }, $responseData);

        return $result;
    }

    public abstract function create();

    public function show(int $id)
    {
        $responseData = $this->makeRequest('GET', $this->getRequestPath($id));

        return (new ResponseFactory($this->domain, $responseData))->getResponse();
    }

    public abstract function update();

    public abstract function delete();

    public function __call($name, $arguments)
    {
        if (in_array($name, $this->only)) {
            $this->$name($arguments);
        }
    }
}