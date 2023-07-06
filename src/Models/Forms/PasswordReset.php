<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\PasswordResetResponse;

final class PasswordReset implements Post
{
    public string $email;

    public function resourceUrl(): string
    {
        return '/user/password_reset';
    }

    public function responseModel(): string
    {
        return PasswordResetResponse::class;
    }
}
