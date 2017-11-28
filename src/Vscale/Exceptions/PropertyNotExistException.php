<?php

namespace Vscale\Exceptions;

use Exception;

class PropertyNotExistException extends Exception
{
    protected $message = 'Property does not exist';
}