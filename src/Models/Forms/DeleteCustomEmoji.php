<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\DeleteCustomEmojiResponse;

final class DeleteCustomEmoji implements Post
{
    public int $id;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/custom_emoji/delete';
    }

    public function responseModel(): string
    {
        return DeleteCustomEmojiResponse::class;
    }
}
