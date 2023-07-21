<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Data;

use JGrim\Lemmy\Sdk\Contracts\Model;

final class PostReport implements Model
{
    public int $id;
    public int $creator_id;
    public int $post_id;
    public string $original_post_name;
    public ?string $original_post_url = null;
    public ?string $original_post_body = null;
    public string $reason;
    public bool $resolved;
    public ?int $resolver_id;
    public string $published;
    public ?string $updated = null;
}
