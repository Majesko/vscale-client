<?php

class ResponseFactory
{
    private $domain;

    public function __construct(string $domain, array $props)
    {
        $this->domain = $domain;
        $this->props = $props;
    }

    public function getResponse()
    {
        switch ($this->domain) {
            case 'domain':
                return new Domain($this->props);
                break;

            default:
                throw new Exception('Class does not exist');
        }
    }
}