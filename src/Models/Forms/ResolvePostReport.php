<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Put;
use JGrim\Lemmy\Sdk\Models\Responses\PostReportResponse;

final class ResolvePostReport implements Put
{
    public int $report_id;
    public bool $resolved;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/post/report/resolve';
    }

    public function responseModel(): string
    {
        return PostReportResponse::class;
    }
}
