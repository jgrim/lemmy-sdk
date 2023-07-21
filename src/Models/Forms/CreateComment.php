<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\CommentResponse;

final class CreateComment implements Post
{
    public string $content;
    public int $post_id;
    public ?int $parent_id;
    public ?int $language_id;
    public ?string $form_id;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/comment';
    }

    public function responseModel(): string
    {
        return CommentResponse::class;
    }
}
