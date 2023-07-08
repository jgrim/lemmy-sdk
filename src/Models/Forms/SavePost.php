<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Put;
use JGrim\Lemmy\Sdk\Models\Responses\PostResponse;

final class SavePost implements Put
{
    public int $post_id;
    public bool $save;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/post/save';
    }

    public function responseModel(): string
    {
        return PostResponse::class;
    }
}
