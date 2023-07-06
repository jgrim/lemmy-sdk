<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\GetRepliesResponse;

final class MarkAllAsRead implements Post
{
    public string $auth;

    public function resourceUrl(): string
    {
        return '/user/mark_all_as_read';
    }

    public function responseModel(): string
    {
        return GetRepliesResponse::class;
    }
}
