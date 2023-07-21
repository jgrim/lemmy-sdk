<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Data;

use JGrim\Lemmy\Sdk\Contracts\Model;

final class Community implements Model
{
    public int $id;
    public string $name;
    public string $title;
    public ?string $description = null;
    public bool $removed;
    public string $published;
    public ?string $updated = null;
    public bool $deleted;
    public bool $nsfw;
    public ?string $actor_id = null;
    public bool $local;
    public ?string $icon = null;
    public ?string $banner = null;
    public ?string $followers_url = null;
    public ?string $inbox_url = null;
    public bool $hidden;
    public bool $posting_restricted_to_mods;
    public int $instance_id;
}
