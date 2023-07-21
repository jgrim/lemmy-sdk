<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\CommentReplyResponse;

final class MarkCommentReplyAsRead implements Post
{
    public int $comment_reply_id;
    public bool $read;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/comment/mark_as_read';
    }

    public function responseModel(): string
    {
        return CommentReplyResponse::class;
    }
}
