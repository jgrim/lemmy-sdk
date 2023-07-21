<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Get;
use JGrim\Lemmy\Sdk\Models\Responses\PrivateMessagesResponse;

final class GetPrivateMessages implements Get
{
    public ?bool $unread_only = null;
    public ?int $page = null;
    public ?int $limit = null;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/private_message/list';
    }

    public function responseModel(): string
    {
        return PrivateMessagesResponse::class;
    }
}
