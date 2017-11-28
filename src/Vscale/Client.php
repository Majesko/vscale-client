<?php

namespace Vscale;

use Vscale\Requests\BillingRequest;
use Vscale\Requests\ImageRequest;
use Vscale\Requests\ScaletRequest;

class Client
{
    protected $token;

    public function __construct(string $token)
    {
        $this->token = $token;
    }

    public function billing()
    {
        return new BillingRequest($this->token);
    }

    public function scalets()
    {
        return new ScaletRequest($this->token);
    }

    public function images()
    {
        return new ImageRequest($this->token);
    }
}