<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\BlockPersonResponse;

final class BlockPerson implements Post
{
    public int $person_id;
    public bool $block;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/user/block';
    }

    public function responseModel(): string
    {
        return BlockPersonResponse::class;
    }
}
