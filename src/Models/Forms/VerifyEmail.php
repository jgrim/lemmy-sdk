<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\VerifyEmailResponse;

final class VerifyEmail implements Post
{
    public string $token;

    public function resourceUrl(): string
    {
        return '/user/verify_email';
    }

    public function responseModel(): string
    {
        return VerifyEmailResponse::class;
    }
}
