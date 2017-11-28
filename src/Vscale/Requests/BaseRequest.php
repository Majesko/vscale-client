<?php

namespace Vscale\Requests;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\ClientException;
use Vscale\Exceptions\EntityNotExistException;

class BaseRequest
{
    private $base_uri = 'https://api.vscale.io';
    private $api_version = 'v1';
    protected $domain;
    protected $httpClient;
    protected $token;

    public function __construct(string $token)
    {
        $this->token = $token;
        $this->httpClient = new HttpClient([
            'base_uri' => $this->getBaseUri()
        ]);
    }

    protected function getBaseUri()
    {
        return $this->base_uri.'/'.$this->api_version.'/';
    }

    protected function getRequestPath(string $path = null)
    {
        return $path ? $this->domain.'/'.$path : $this->domain;
    }

    protected function makeRequest(string $method, string $path, array $params = [])
    {
        try {
            $response = $this->httpClient->request($method, $path, [
                'headers' => [
                    'X-Token' => $this->token
                ],
                'query' => $params
            ]);
        } catch (ClientException $e) {
            if ($e->getCode() === 404) {
                throw new EntityNotExistException();
            }
        }

        return \GuzzleHttp\json_decode($response->getBody()->getContents(), true);
    }
}