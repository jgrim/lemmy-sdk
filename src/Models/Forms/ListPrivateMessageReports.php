<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Get;
use JGrim\Lemmy\Sdk\Models\Responses\ListPrivateMessageReportsResponse;

final class ListPrivateMessageReports implements Get
{
    public ?int $page = null;
    public ?int $limit = null;
    public ?bool $unresolved_only = null;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/private_message/report/list';
    }

    public function responseModel(): string
    {
        return ListPrivateMessageReportsResponse::class;
    }
}
