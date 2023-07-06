<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Get;
use JGrim\Lemmy\Sdk\Models\Responses\GetCommunityResponse;

final class GetCommunity implements Get
{
    public ?int $id;
    public ?string $name;
    public ?string $auth;

    public function resourceUrl(): string
    {
        return '/community';
    }

    public function responseModel(): string
    {
        return GetCommunityResponse::class;
    }
}
