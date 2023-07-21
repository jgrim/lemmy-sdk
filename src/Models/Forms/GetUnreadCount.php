<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Get;
use JGrim\Lemmy\Sdk\Models\Responses\GetUnreadCountResponse;

final class GetUnreadCount implements Get
{
    public string $auth;

    public function resourceUrl(): string
    {
        return '/user/unread_count';
    }

    public function responseModel(): string
    {
        return GetUnreadCountResponse::class;
    }
}
