<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\CommentResponse;

final class DistinguishComment implements Post
{
    public int $comment_id;
    public bool $distinguished;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/comment/distinguish';
    }

    public function responseModel(): string
    {
        return CommentResponse::class;
    }
}
