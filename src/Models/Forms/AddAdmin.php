<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\AddAdminResponse;

final class AddAdmin implements Post
{
    public int $person_id;
    public bool $added;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/admin/add';
    }

    public function responseModel(): string
    {
        return AddAdminResponse::class;
    }
}
