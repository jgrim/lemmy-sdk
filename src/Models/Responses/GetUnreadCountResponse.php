<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;

final class GetUnreadCountResponse implements Model
{
    public int $replies;
    public int $mentions;
    public int $private_messages;
}
