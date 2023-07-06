<?php

namespace JGrim\Lemmy\Sdk\Exceptions;

use Psr\Http\Client\RequestExceptionInterface;

class RequestExceptionHandler
{
    public static function handle(RequestExceptionInterface $exception): void
    {
        // @todo handle
        throw $exception;
    }
}
