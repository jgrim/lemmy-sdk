<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Views\PrivateMessageReportView;

final class PrivateMessageReportResponse implements Model
{
    public PrivateMessageReportView $private_message_report_view;
}
