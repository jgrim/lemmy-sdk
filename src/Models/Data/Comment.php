<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Data;

use JGrim\Lemmy\Sdk\Contracts\Model;

final class Comment implements Model
{
    public int $id;
    public int $creator_id;
    public int $post_id;
    public string $content;
    public bool $removed;
    public string $published;
    public ?string $updated = null;
    public bool $deleted;
    public string $ap_id;
    public bool $local;
    public string $path;
    public bool $distinguished;
    public int $language_id;
}
