<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\CustomEmojiResponse;

final class CreateCustomEmoji implements Post
{
    public string $category;
    public string $shorcode;
    public string $image_url;
    public string $alt_text;
    public array $keywords;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/custom_emoji';
    }

    public function responseModel(): string
    {
        return CustomEmojiResponse::class;
    }
}
