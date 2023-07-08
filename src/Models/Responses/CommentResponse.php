<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Views\CommentView;

final class CommentResponse implements Model
{
    public CommentView $comment_view;
    public array $recipient_ids;

    public ?string $form_id;
}
