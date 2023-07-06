<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Get;
use JGrim\Lemmy\Sdk\Models\Enums\CommentSortType;
use JGrim\Lemmy\Sdk\Models\Responses\GetRepliesResponse;

final class GetReplies implements Get
{
    public ?CommentSortType $sort = null;
    public ?int $page = null;
    public ?int $limit = null;
    public ?bool $unread_only = null;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/user/replies';
    }

    public function responseModel(): string
    {
        return GetRepliesResponse::class;
    }
}
