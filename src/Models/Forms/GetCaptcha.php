<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Get;
use JGrim\Lemmy\Sdk\Models\Responses\GetCaptchaResponse;

final class GetCaptcha implements Get
{
    public string $auth;

    public function resourceUrl(): string
    {
        return '/user/get_captcha';
    }

    public function responseModel(): string
    {
        return GetCaptchaResponse::class;
    }
}
