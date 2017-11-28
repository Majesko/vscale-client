<?php

namespace Vscale\Requests;

use Vscale\Entities\Image;

class ImageRequest extends BaseRequest
{
    protected $domain = 'images';
    protected $only = ['index'];

    public function index()
    {
        $requestData = $this->makeRequest('GET', $this->getRequestPath());

        $result = array_map(function($item) {
            return new Image($item);
        }, $requestData);

        return $result;
    }
}