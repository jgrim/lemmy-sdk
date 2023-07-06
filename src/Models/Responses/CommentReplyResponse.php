<?php

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Views\CommentReplyView;

final class CommentReplyResponse implements Model
{
    public CommentReplyView $comment_reply_view;
}
