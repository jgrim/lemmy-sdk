<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\PrivateMessageReportResponse;

final class CreatePrivateMessageReport implements Post
{
    public int $private_message_id;
    public string $reason;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/private_message/report';
    }

    public function responseModel(): string
    {
        return PrivateMessageReportResponse::class;
    }
}
