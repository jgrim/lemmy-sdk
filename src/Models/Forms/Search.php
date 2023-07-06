<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Get;
use JGrim\Lemmy\Sdk\Models\Enums\SearchType;
use JGrim\Lemmy\Sdk\Models\Responses\SearchResponse;

final class Search implements Get
{
    public string $q;
    public ?int $community_id = null;
    public ?string $community_name = null;
    public ?int $creator_id = null;
    public ?SearchType $type_ = null;
    public ?string $sort = null;
    public ?string $listing_type = null;
    public ?string $page = null;
    public ?string $limit = null;
    public ?string $auth = null;

    public function resourceUrl(): string
    {
        return '/search';
    }

    public function responseModel(): string
    {
        return SearchResponse::class;
    }
}
