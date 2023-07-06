<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Put;
use JGrim\Lemmy\Sdk\Models\Responses\PostResponse;

final class EditPost implements Put
{
    public int $post_id;
    public ?string $name = null;
    public ?string $url = null;
    public ?string $body = null;
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
