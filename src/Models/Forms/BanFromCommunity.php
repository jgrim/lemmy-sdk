<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\BanFromCommunityResponse;

final class BanFromCommunity implements Post
{
    public int $community_id;
    public int $person_id;
    public bool $ban;
    public ?bool $remove_data = null;
    public ?string $reason = null;
    public ?int $expires = null;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/community/ban_user';
    }

    public function responseModel(): string
    {
        return BanFromCommunityResponse::class;
    }
}
