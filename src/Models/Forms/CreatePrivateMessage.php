<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\PrivateMessageResponse;

final class CreatePrivateMessage implements Post
{
    public string $content;
    public int $recipient_id;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/private_message';
    }

    public function responseModel(): string
    {
        return PrivateMessageResponse::class;
    }
}
