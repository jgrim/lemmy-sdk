<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Put;
use JGrim\Lemmy\Sdk\Models\Responses\PrivateMessageReportResponse;

final class ResolvePrivateMessageReport implements Put
{
    public int $report_id;
    public bool $resolved;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/private_message/report/resolve';
    }

    public function responseModel(): string
    {
        return PrivateMessageReportResponse::class;
    }
}
