<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\CommentResponse;

final class DeleteComment implements Post
{
    public int $comment_id;
    public bool $deleted;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/comment/delete';
    }

    public function responseModel(): string
    {
        return CommentResponse::class;
    }
}
