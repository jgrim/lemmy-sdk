<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\LoginResponse;

final class Login implements Post
{
    public string $username_or_email;
    public string $password;
    public ?string $totp_2fa_token = null;

    public function resourceUrl(): string
    {
        return '/user/login';
    }

    public function responseModel(): string
    {
        return LoginResponse::class;
    }
}
