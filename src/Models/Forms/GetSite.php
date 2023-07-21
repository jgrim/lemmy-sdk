<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Get;
use JGrim\Lemmy\Sdk\Models\Responses\GetSiteResponse;

final class GetSite implements Get
{
    public ?string $auth = null;

    public function resourceUrl(): string
    {
        return '/site';
    }

    public function responseModel(): string
    {
        return GetSiteResponse::class;
    }
}
