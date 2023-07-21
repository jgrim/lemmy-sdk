<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Get;
use JGrim\Lemmy\Sdk\Models\Enums\ListingType;
use JGrim\Lemmy\Sdk\Models\Enums\SortType;
use JGrim\Lemmy\Sdk\Models\Responses\ListCommunitiesResponse;

final class ListCommunities implements Get
{
    public ?ListingType $type_ = null;
    public ?SortType $sort = null;
    public ?bool $show_nsfw = null;
    public ?int $page = null;
    public ?int $limit = null;
    public ?string $auth = null;

    public function resourceUrl(): string
    {
        return '/community/list';
    }

    public function responseModel(): string
    {
        return ListCommunitiesResponse::class;
    }
}
