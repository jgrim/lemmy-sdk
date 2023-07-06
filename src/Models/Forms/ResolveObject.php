<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Get;
use JGrim\Lemmy\Sdk\Models\Responses\ResolveObjectResponse;

final class ResolveObject implements Get
{
    public string $q;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/resolve_object';
    }

    public function responseModel(): string
    {
        return ResolveObjectResponse::class;
    }
}
