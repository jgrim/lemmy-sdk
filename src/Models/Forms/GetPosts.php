<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Get;
use JGrim\Lemmy\Sdk\Models\Enums\ListingType;
use JGrim\Lemmy\Sdk\Models\Enums\SortType;
use JGrim\Lemmy\Sdk\Models\Responses\GetPostsResponse;

final class GetPosts implements Get
{
    public ?ListingType $type_ = null;
    public ?SortType $sort = null;
    public ?int $page = null;
    public ?int $limit = null;
    public ?int $community_id = null;
    public ?string $community_name = null;
    public ?bool $saved_only = null;
    public ?string $auth = null;

    public function resourceUrl(): string
    {
        return '/post/list';
    }

    public function responseModel(): string
    {
        return GetPostsResponse::class;
    }
}
