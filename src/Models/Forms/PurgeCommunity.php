<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\PurgeItemResponse;

final class PurgeCommunity implements Post
{
    public int $community_id;
    public ?string $reason;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/admin/purge/community';
    }

    public function responseModel(): string
    {
        return PurgeItemResponse::class;
    }
}
