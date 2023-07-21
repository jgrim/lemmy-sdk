<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Data\SiteMetadata;

final class GetSiteMetadataResponse implements Model
{
    public SiteMetadata $metadata;
}
