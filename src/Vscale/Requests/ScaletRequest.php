<?php

namespace Vscale\Requests;

use Vscale\Entities\Scalet;

class ScaletRequest extends BaseRequest
{
    protected $domain = 'scalets';

    public function index()
    {
        $responseData = $this->makeRequest('GET', $this->getRequestPath());

        return array_map(function($item) {
            return new Scalet($item);
        }, $responseData);
    }

    public function show(int $id)
    {
        $responseData = $this->makeRequest('GET', $this->getRequestPath($id));

        return new Scalet($responseData);
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

    public function restart(int $id)
    {
        $responseData = $this->makeRequest('GET', $this->getRequestPath($id.'/restart'));

        return new Scalet($responseData);
    }
}