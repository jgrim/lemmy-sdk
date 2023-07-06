<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\LoginResponse;

final class Register implements Post
{
    public string $username;
    public string $password;
    public string $password_verify;
    public bool $show_nsfw;
    public ?string $email = null;
    public ?string $captcha_answer = null;
    public ?string $honeypot = null;
    public ?string $answer = null;

    public function resourceUrl(): string
    {
        return '/user/register';
    }

    public function responseModel(): string
    {
        return LoginResponse::class;
    }
}
