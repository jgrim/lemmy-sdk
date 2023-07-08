<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\PrivateMessageResponse;

final class DeletePrivateMessage implements Post
{
    public int $private_message_id;
    public bool $deleted;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/private_message/delete';
    }

    public function responseModel(): string
    {
        return PrivateMessageResponse::class;
    }
}