<?php

namespace Dvsa\Contracts\Auth\Exceptions;

/**
 * This exception will be thrown when a client library throws an exception.
 * This allows the consumers to catch this and then appropriately handle the
 * implementation-specific exception using the `getPrevious()` method.
 */
class ClientException extends \Exception
{
    //
}
