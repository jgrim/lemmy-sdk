<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Data;

final class LocalSiteRateLimit
{
    public int $id;
    public int $local_site_id;
    public int $message;
    public int $message_per_second;
    public int $post;
    public int $post_per_second;
    public int $register;
    public int $register_per_second;
    public int $image;
    public int $image_per_second;
    public int $comment;
    public int $comment_per_second;
    public int $search;
    public int $search_per_second;
    public string $published;
    public ?string $updated = null;
}
