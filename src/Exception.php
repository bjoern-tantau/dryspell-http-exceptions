<?php

namespace Dryspell\Http;

/**
 * Exception that should result in this error being returned as a response HTTP code
 *
 * @package Dryspell\Http
 * @author Björn Tantau <bjoern@bjoern-tantau.de>
 */
class Exception extends \RuntimeException
{

    const ERROR_CODE = 500;
    const ERROR_MESSAGE = 'Internal Server Error';

    public function __construct(string $message = null, int $code = null, \Throwable $previous = null)
    {
        if (is_null($message)) {
            $message = static::ERROR_MESSAGE;
        }
        if (is_null($code)) {
            $code = static::ERROR_CODE;
        }
        parent::__construct($message, $code, $previous);
    }
}