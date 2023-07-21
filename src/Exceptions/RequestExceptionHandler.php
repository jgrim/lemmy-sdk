<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Exceptions;

use Psr\Http\Client\ClientExceptionInterface;

class RequestExceptionHandler
{
    public static function handle(ClientExceptionInterface $exception): void
    {
        // @todo handle
        throw $exception;
    }
}
