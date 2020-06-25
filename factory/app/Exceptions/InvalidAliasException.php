<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class InvalidAliasException extends Exception
{
    public function __construct(Throwable $previous = null)
    {
        parent::__construct('Invalid alias', 0, $previous);
    }
}
