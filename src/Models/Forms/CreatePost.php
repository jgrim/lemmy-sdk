<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\PostResponse;

final class CreatePost implements Post
{
    public string $name;
    public int $community_id;
    public ?string $url = null;
    public ?string $body = null;
    public ?string $honeypot = null;
    public ?bool $nsfw = null;
    public ?int $language_id = null;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/post';
    }

    public function responseModel(): string
    {
        return PostResponse::class;
    }
}
