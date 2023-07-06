<?php

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Data\Tagline;
use JGrim\Lemmy\Sdk\Models\Views\SiteView;

final class SiteResponse implements Model
{
    public SiteView $site_view;
    #[\Sunrise\Hydrator\Annotation\Relationship(Tagline::class)]
    public array $tag_lines;
}
