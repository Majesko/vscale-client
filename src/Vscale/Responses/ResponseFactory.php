<?php

namespace Vscale\Responses;

use Exception;
use Vscale\Entities\Entity;
use Vscale\Entities\Domain;
use Vscale\Entities\Image;
use Vscale\Entities\Scalet;
use Vscale\Exceptions\EntityNotExistException;

class ResponseFactory
{
    private $domain;

    public function __construct(string $domain, array $props)
    {
        $this->domain = $domain;
        $this->props = $props;
    }

    public function getResponse(): Entity
    {
        switch ($this->domain) {
            case 'domain':
                return new Domain($this->props);

            case 'scalets':
                return new Scalet($this->props);

            case 'images';
                return new Image($this->props);

            default:
                throw new EntityNotExistException();
        }
    }
}