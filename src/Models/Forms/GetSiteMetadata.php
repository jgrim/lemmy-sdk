<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Get;
use JGrim\Lemmy\Sdk\Models\Responses\GetSiteMetadataResponse;

final class GetSiteMetadata implements Get
{
    public string $url;

    public function resourceUrl(): string
    {
        return '/post/site_metadata';
    }

    public function responseModel(): string
    {
        return GetSiteMetadataResponse::class;
    }
}
