<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk;

use JGrim\Lemmy\Sdk\Contracts\Model;

class Extractor
{
    /**
     * @throws \JsonException
     */
    public static function extract(Model $model): array
    {
        return json_decode(
            json_encode($model, JSON_THROW_ON_ERROR),
            true,
            512,
            JSON_THROW_ON_ERROR
        );
    }
}
