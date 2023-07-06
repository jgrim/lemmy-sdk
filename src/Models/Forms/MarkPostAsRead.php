<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\PostResponse;

final class MarkPostAsRead implements Post
{
    public int $post_id;
    public bool $read;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/post/mark_as_read';
    }

    public function responseModel(): string
    {
        return PostResponse::class;
    }
}
