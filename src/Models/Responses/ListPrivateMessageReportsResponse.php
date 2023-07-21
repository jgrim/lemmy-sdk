<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Views\PrivateMessageReportView;
use Sunrise\Hydrator\Annotation\Relationship;

final class ListPrivateMessageReportsResponse implements Model
{
    #[Relationship(PrivateMessageReportView::class)]
    public array $private_message_reports;
}
