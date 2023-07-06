<?php

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Views\PrivateMessageView;
use Sunrise\Hydrator\Annotation\Relationship;

final class PrivateMessagesResponse implements Model
{
    #[Relationship(PrivateMessageView::class)]
    public array $private_messages;
}
