<?php

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Views\CommentReportView;

final class CommentReportResponse implements Model
{
    public CommentReportView $comment_report_view;
}
