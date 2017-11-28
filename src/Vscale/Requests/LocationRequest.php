<?php

namespace Vscale\Requests;

use Vscale\Entities\Location;

class LocationRequest extends BaseRequest
{
    protected $domain = 'locations';

    public function index()
    {
        $responseData = $this->makeRequest('GET', $this->getRequestPath());

        return array_map(function($item) {
            return new Location($item);
        }, $responseData);
    }
}