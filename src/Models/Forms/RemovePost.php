<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\PostResponse;

final class RemovePost implements Post
{
    public int $post_id;
    public bool $removed;
    public ?string $reason;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/post/remove';
    }

    public function responseModel(): string
    {
        return PostResponse::class;
    }
}
