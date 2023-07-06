<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Get;
use JGrim\Lemmy\Sdk\Models\Responses\GetReportCountResponse;

final class GetReportCount implements Get
{
    public ?int $community_id = null;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/user/report_count';
    }

    public function responseModel(): string
    {
        return GetReportCountResponse::class;
    }
}
