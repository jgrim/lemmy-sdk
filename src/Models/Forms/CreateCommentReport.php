<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\CommentReportResponse;

final class CreateCommentReport implements Post
{
    public int $comment_id;
    public string $reason;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/comment/report';
    }

    public function responseModel(): string
    {
        return CommentReportResponse::class;
    }
}
