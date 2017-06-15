<?php
namespace Vscale\Requests;

class Billing extends BaseRequest
{
    protected $domain = 'billing';

    public function __construct($token)
    {
        parent::__construct($token);
    }

    public function balance()
    {
        return $this->makeRequest('GET', $this->getRequestPath('balance'));
    }
}