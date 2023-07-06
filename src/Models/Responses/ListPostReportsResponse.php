<?php

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Views\PostReportView;
use Sunrise\Hydrator\Annotation\Relationship;

final class ListPostReportsResponse implements Model
{
    #[Relationship(PostReportView::class)]
    public array $post_reports;
}
