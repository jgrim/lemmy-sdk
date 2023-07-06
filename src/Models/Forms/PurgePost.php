<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\PurgeItemResponse;

final class PurgePost implements Post
{
    public int $post_id;
    public ?string $reason;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/admin/purge/post';
    }

    public function responseModel(): string
    {
        return PurgeItemResponse::class;
    }
}
