<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Get;
use JGrim\Lemmy\Sdk\Models\Responses\GetUnreadRegistrationApplicationCountResponse;

final class GetUnreadRegistrationApplicationCount implements Get
{
    public string $auth;

    public function resourceUrl(): string
    {
        return '/admin/registration_application/count';
    }

    public function responseModel(): string
    {
        return GetUnreadRegistrationApplicationCountResponse::class;
    }
}
