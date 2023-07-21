<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Views\CommentReportView;
use Sunrise\Hydrator\Annotation\Relationship;

final class ListCommentReportsResponse implements Model
{
    #[Relationship(CommentReportView::class)]
    public array $comment_reports;
}
