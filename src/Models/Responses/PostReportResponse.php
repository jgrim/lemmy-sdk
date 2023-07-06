<?php

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;

final class PostReportResponse implements Model
{
    public PostReportView $post_report_view;
}
