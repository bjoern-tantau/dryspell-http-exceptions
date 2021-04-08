<?php
namespace Dryspell\Http\Exception;

use Dryspell\Http\Exception;

/**
 * Exception thrown when an invalid request was made
 *
 * @package Dryspell\Http\Exception
 * @author Björn Tantau <bjoern@bjoern-tantau.de>
 */
class BadRequest extends Exception
{

    const ERROR_CODE    = 400;
    const ERROR_MESSAGE = 'Bad Request';

}
