<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\GetSiteResponse;

final class LeaveAdmin implements Post
{
    public string $auth;

    public function resourceUrl(): string
    {
        return '/user/leave_admin';
    }

    public function responseModel(): string
    {
        return GetSiteResponse::class;
    }
}
