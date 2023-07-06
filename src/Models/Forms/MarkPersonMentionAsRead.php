<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\PersonMentionResponse;

final class MarkPersonMentionAsRead implements Post
{
    public int $person_mention_id;
    public bool $read;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/user/mention/mark_as_read';
    }

    public function responseModel(): string
    {
        return PersonMentionResponse::class;
    }
}
