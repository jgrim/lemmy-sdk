<?php

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Views\CommentView;
use Sunrise\Hydrator\Annotation\Relationship;

final class CommentResponse implements Model
{
    public CommentView $comment_view;
    public array $recipient_ids;

    public ?string $form_id;
}
