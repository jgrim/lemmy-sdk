<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Get;
use JGrim\Lemmy\Sdk\Models\Responses\GetModlogResponse;

class GetModLog implements Get
{
    public ?int $mod_person_id = null;
    public ?int $community_id = null;
    public ?int $page = null;
    public ?int $limit = null;
    public ?string $type_ = null;
    public ?int $other_person_id = null;
    public ?string $auth = null;

    public function resourceUrl(): string
    {
        return '/modlog';
    }

    public function responseModel(): string
    {
        return GetModlogResponse::class;
    }
}
