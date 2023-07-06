<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\LoginResponse;

final class PasswordChangeAfterReset implements Post
{
    public string $token;
    public string $password;
    public string $password_verify;

    public function resourceUrl(): string
    {
        return '/user/password_change';
    }

    public function responseModel(): string
    {
        return LoginResponse::class;
    }
}
