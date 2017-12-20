<?php

namespace Dryspell\Http\Exception;

use Dryspell\Http\Exception;

/**
 * Exception thrown when a resource could not be found
 *
 * @package Dryspell\Http\Exception
 * @author Björn Tantau <bjoern@bjoern-tantau.de>
 */
class NotFound extends Exception
{
    const ERROR_CODE = 404;
    const ERROR_MESSAGE = 'Not Found';
}