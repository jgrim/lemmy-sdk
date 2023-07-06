<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\AddModToCommunityResponse;

final class AddModToCommunity implements Post
{
    public int $community_id;
    public int $person_id;
    public bool $added;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/community/mod';
    }

    public function responseModel(): string
    {
        return AddModToCommunityResponse::class;
    }
}
