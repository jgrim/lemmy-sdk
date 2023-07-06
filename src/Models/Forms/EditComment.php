<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Put;
use JGrim\Lemmy\Sdk\Models\Responses\CommentResponse;

final class EditComment implements Put
{
    public int $comment_id;
    public ?string $content = null;
    public ?int $language_id = null;
    public ?string $form_id = null;
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
