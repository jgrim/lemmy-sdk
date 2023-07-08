<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Get;
use JGrim\Lemmy\Sdk\Models\Enums\CommentSortType;
use JGrim\Lemmy\Sdk\Models\Enums\ListingType;
use JGrim\Lemmy\Sdk\Models\Responses\GetCommentsResponse;

final class GetComments implements Get
{
    public ?ListingType $type_ = null;
    public ?CommentSortType $sort = null;
    public ?int $max_depth = null;
    public ?int $page = null;
    public ?int $limit = null;
    public ?int $community_id = null;
    public ?string $community_name = null;
    public ?int $post_id = null;
    public ?int $parent_id = null;
    public ?bool $saved_only = null;
    public ?string $auth = null;

    public function resourceUrl(): string
    {
        return '/comment/list';
    }

    public function responseModel(): string
    {
        return GetCommentsResponse::class;
    }
}
