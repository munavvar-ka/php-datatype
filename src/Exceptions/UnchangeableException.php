<?php

namespace Asmthry\PhpDatatype\Exceptions;

use Exception;

class UnchangeableException extends Exception
{
    public $message = "You are not allowed to change this value";
}
