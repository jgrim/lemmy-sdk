<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\CommentResponse;

final class RemoveComment implements Post
{
    public int $comment_id;
    public bool $removed;
    public ?string $reason;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/comment/remove';
    }

    public function responseModel(): string
    {
        return CommentResponse::class;
    }
}
