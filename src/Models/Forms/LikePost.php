<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\PostResponse;

final class LikePost implements Post
{
    public int $post_id;
    public int $score;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/post/like';
    }

    public function responseModel(): string
    {
        return PostResponse::class;
    }
}
