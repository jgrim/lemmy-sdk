<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Put;
use JGrim\Lemmy\Sdk\Models\Responses\LoginResponse;

final class ChangePassword implements Put
{
    public string $new_password;
    public string $new_password_verify;
    public string $old_password;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/user/change_password';
    }

    public function responseModel(): string
    {
        return LoginResponse::class;
    }
}
