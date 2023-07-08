<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Get;
use JGrim\Lemmy\Sdk\Models\Responses\ListCommentReportsResponse;

final class ListCommentReports implements Get
{
    public ?int $page = null;
    public ?int $limit = null;
    public ?bool $unresolved_only = null;
    public ?int $community_id = null;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/comment/report/list';
    }

    public function responseModel(): string
    {
        return ListCommentReportsResponse::class;
    }
}
