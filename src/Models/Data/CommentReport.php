<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Data;

use JGrim\Lemmy\Sdk\Contracts\Model;

final class CommentReport implements Model
{
    public int $id;
    public int $creator_id;
    public int $comment_id;
    public string $original_comment_text;
    public string $reason;
    public bool $resolved;
    public ?int $resolver_id = null;
    public string $published;
    public ?string $updated = null;
}
