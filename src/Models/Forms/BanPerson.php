<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\BanPersonResponse;

final class BanPerson implements Post
{

    public function resourceUrl(): string
    {
        return '/user/ban';
    }

    public function responseModel(): string
    {
        return BanPersonResponse::class;
    }
}
