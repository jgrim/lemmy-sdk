<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\PostResponse;

final class LockPost implements Post
{
    public int $post_id;
    public bool $locked;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/post/lock';
    }

    public function responseModel(): string
    {
        return PostResponse::class;
    }
}
