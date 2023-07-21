<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;

final class GetReportCountResponse implements Model
{
    public ?int $community_id = null;
    public int $comment_reports;
    public int $post_reports;
    public ?int $private_message_reports = null;
}
