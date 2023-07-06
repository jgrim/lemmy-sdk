<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Get;
use JGrim\Lemmy\Sdk\Models\Enums\SortType;
use JGrim\Lemmy\Sdk\Models\Responses\GetPersonDetailsResponse;

final class GetPersonDetails implements Get
{
    public ?int $person_id = null;
    public ?string $username = null;
    public ?SortType $sort = null;
    public ?int $page = null;
    public ?int $limit = null;
    public ?int $community_id = null;
    public ?bool $saved_only = null;
    public ?string $auth = null;

    public function resourceUrl(): string
    {
        return '/user';
    }

    public function responseModel(): string
    {
        return GetPersonDetailsResponse::class;
    }
}
