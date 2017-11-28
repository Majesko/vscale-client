<?php

namespace Vscale\Exceptions;

use Exception;

class EntityNotExistException extends Exception
{
    protected $message = 'Entity does not exist';
}