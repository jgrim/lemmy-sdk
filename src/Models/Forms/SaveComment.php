<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Put;
use JGrim\Lemmy\Sdk\Models\Responses\CommentResponse;

final class SaveComment implements Put
{
    public int $comment_id;
    public bool $save;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/comment/save';
    }

    public function responseModel(): string
    {
        return CommentResponse::class;
    }
}
