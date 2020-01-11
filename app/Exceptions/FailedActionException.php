<?php

namespace App\Exceptions;

/**
 * Source from the Forge-sdk, thanks msaid
 * @link https://github.com/themsaid/forge-sdk
 */

use Exception;

class FailedActionException extends Exception
{
    /**
     * Create a new exception instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        parent::__construct($message);
    }
}
