<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\CommunityResponse;

final class FollowCommunity implements Post
{
    public int $community_id;
    public bool $follow;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/community/follow';
    }

    public function responseModel(): string
    {
        return CommunityResponse::class;
    }
}
