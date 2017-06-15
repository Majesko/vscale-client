<?php

namespace Vscale;

use Vscale\Requests\Billing;

class Client
{
    protected $token;

    public function __construct(string $token)
    {
        $this->token = $token;
    }

    public function billing()
    {
        return new Billing($this->token);
    }
}