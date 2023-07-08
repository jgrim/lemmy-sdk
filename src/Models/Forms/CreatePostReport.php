<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\PostReportResponse;

final class CreatePostReport implements Post
{
    public int $post_id;
    public string $reason;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/post/report';
    }

    public function responseModel(): string
    {
        return PostReportResponse::class;
    }
}
