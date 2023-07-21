<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Put;
use JGrim\Lemmy\Sdk\Models\Responses\PrivateMessageResponse;

final class EditPrivateMessage implements Put
{
    public int $private_message_id;
    public string $content;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/private_message';
    }

    public function responseModel(): string
    {
        return PrivateMessageResponse::class;
    }
}
