<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Data;

use JGrim\Lemmy\Sdk\Contracts\Model;

final class CommentReply implements Model
{
    public int $id;
    public int $recipient_id;
    public int $comment_id;
    public bool $read;
    public string $published;
}
