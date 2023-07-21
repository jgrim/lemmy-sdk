<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Views\PrivateMessageView;

final class PrivateMessageResponse implements Model
{
    public PrivateMessageView $private_message_view;
}
