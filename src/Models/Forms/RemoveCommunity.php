<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\CommunityResponse;

final class RemoveCommunity implements Post
{
    public int $community_id;
    public bool $removed;
    public ?string $reason = null;
    public ?int $expires = null;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/community/remove';
    }

    public function responseModel(): string
    {
        return CommunityResponse::class;
    }
}
