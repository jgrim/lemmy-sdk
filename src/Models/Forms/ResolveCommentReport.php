<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Put;
use JGrim\Lemmy\Sdk\Models\Responses\CommentReportResponse;

final class ResolveCommentReport implements Put
{
    public int $report_id;
    public bool $resolved;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/comment/report/resolve';
    }

    public function responseModel(): string
    {
        return CommentReportResponse::class;
    }
}
