<?php

declare(strict_types = 1);

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Aggregates\SiteAggregates;
use JGrim\Lemmy\Sdk\Models\Data\LocalSite;
use JGrim\Lemmy\Sdk\Models\Data\LocalSiteRateLimit;
use JGrim\Lemmy\Sdk\Models\Data\Site;

final class SiteView implements Model
{
    public Site $site;
    public LocalSite $local_site;
    public LocalSiteRateLimit $local_site_rate_limit;
    public SiteAggregates $counts;
}
