<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\PurgeItemResponse;

final class PurgePerson implements Post
{
    public int $person_id;
    public ?string $reason = null;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/admin/purge/person';
    }

    public function responseModel(): string
    {
        return PurgeItemResponse::class;
    }
}
